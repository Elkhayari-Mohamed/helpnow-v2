<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PatientsController;

use App\Models\Consultation;
use App\Models\MedicalRecord;
use App\Models\Patient;
use App\Models\Doctor;
use App\Models\Wallet;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Routing\ResponseFactory;

class ConsultationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */




    public function create($id)
    {
        $user_id = Auth::id();

        $patient = Patient::where('user_id',$user_id)->first();
        $doctor  = Doctor::where('id',$id)->first();



        return view('patients.consultation',

            compact('patient' ,'doctor')

        );    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request ,$id)
    {
      // $idd=$this.create()->$id;
      $taken= Consultation::select('consultation_date')->where('doctor_id',$id)->get()->pluck('consultation_date');

     $datetime=$request->consultation_date.":00";
     $str_js= json_encode($taken);
     $dateTaken=Str::contains($str_js,$datetime);
    // dd($request);
     $user_id = Auth::id();
     $patient =Patient::where('user_id',$user_id)->first();
     $doctor =Doctor::where('id',$id)->first();

      if($dateTaken==false){
        $consultation = Consultation::create([

            'doctor_id'     =>$doctor->id,
            'patient_id'    =>$patient->id,
            'descriptions'  =>$request->descriptions,
            'price'         =>'500',
            'link'          ,
            'consultation_date' =>$request->consultation_date,
            'status'
       ]);

      $medicalrecord = MedicalRecord::create([

        'patient_id'             => $patient->id,
        'consultation_id'        => $consultation->id,
        'symptoms'               => $request->symptoms,
        'current_medications'    => $request->current_medications,
        'medical_history'        => $request->medical_history,
        'allergies'              => $request->allergies,
        'family_medical_history' => $request->family_medical_history,
        'lifestyle_information'  => $request->lifestyle_information,

            ]);

       return redirect('patients/index');}

       else{
        return Redirect::back()->withErrors(['msg' => 'Date Is Already Taken ! Please Chose Another Date']);
       }


    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function show( $consultation_id,$payed)
    {
       // dd($consultation_id);
        if($payed == 1){
            Consultation::find($consultation_id)->update(['payed'=>$payed]);
            $consultation=Consultation::where('id',$consultation_id)->first();
            $patient_id=Patient::select('user_id')->where('id',$consultation->patient_id)->first();
          //dd($consultation->price);
            $total = Wallet::select('balance')->where('patient_id',$patient_id->user_id)->first();
            $balance= $total->balance;

             $balance =$balance-$consultation->price;
             if($balance >= 0){
             // dd($balance);
             Wallet::select('balance')->where('patient_id',$patient_id->user_id)->update(['balance'=>$balance]);

             return redirect()->action([WalletsController::class, 'show'], ['patient_id' => $consultation->patient_id]);}

           else
           $payed = 0;
           Consultation::find($consultation_id)->update(['payed'=>$payed]);

             return  Redirect::back()->withErrors(['Please Charge Your Balance']);
           }

        else{
            $consultation=Consultation::where('id',$consultation_id)->first();

            return view('patients.consult_show',['consultation'=>$consultation]);

        }
       }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function edit(Consultation $consultation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consultation $consultation,$cons_id)
    {
        $data =  $request->all();
        $id = Auth::id();
        unset($data['_token']);

       $doc_id=Doctor::select('id')->where('user_id',$id)->first();
       //dd($data);

       //
       //dd($cons_id);
       $patients_list= Consultation::where(
        'doctor_id',$doc_id->id
    )->get();


  //  dd($cons_id);


    return view('doctors.patients_list',['patients_list'=>$patients_list]);
    }


    public function update_2($cons_id,$status){

    $data=[];
    $data=  Arr::add($data, 'id' , $cons_id);
    $id = Auth::id();
    $doc_id=Doctor::select('id')->where('user_id',$id)->first();
if($status == 1){
    $link=$this->generateRandomString(10);
     $data=Arr::add($data, 'link' , $link);

       Consultation::where([
        'doctor_id'=>$doc_id->id,
        'id'=>$cons_id
        ])->update($data);}

        Consultation::find($cons_id)
        ->update(['status'=>$status]);

        return redirect('/doctors/Patients_list');

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consultation $consultation)
    {
        //
    }

    public function consultationRequest($consultation_id)
    {

        $consultationRequest=Consultation::where('id',$consultation_id)->with('medical_record')->first();
        //dd($consultationRequest);
        return view('doctors.consultation',

            ['consultationRequest'=> $consultationRequest]

        );    }

}
