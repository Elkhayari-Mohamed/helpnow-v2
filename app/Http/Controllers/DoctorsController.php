<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Specialitie;
use App\Models\DoctorSpecialitie;
use App\Models\User;
use App\Models\Patientlist;
use App\Models\Consultation;
use App\Models\Specialty;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
class DoctorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id=Auth::user()->id;
        $id=Doctor::select('id')->where('user_id',$user_id)->first();
      
       //dd($wallet);
       $consultations=Consultation::where('doctor_id',$id->id)->get();
       $balance=$consultations->where('payed','1')->sum('price');
      
      //dd($balance);
      
        return view('doctors.index',[
            'consultations'=>$consultations,
            'balance' => $balance
    ]); 
        //return view('doctors.index')->withErrors(['Please Charge Your Balance']);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doctors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $Doctor)
    {

        $specialities = Specialitie::select('name','description')->get();

        Doctor::create([
             'user_id'             =>$Doctor->user_id=Auth::id(),
             'first_name'          =>$Doctor->first_name,
             'last_name'           =>$Doctor->last_name,
             'specialitie_name'    =>$Doctor->specialitie_name,
             'Phone'               =>$Doctor->phone,
             'city'                =>$Doctor->city,
             'country'             =>$Doctor->country,
             'address'             =>$Doctor->address,
             'age'                 =>$Doctor->age,
             'gender'              =>$Doctor->gender,
             'notes'               =>$Doctor->notes,

        ]);

        return redirect()->route('doctorsIndex',['specialities'=> $specialities]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {

        $id = Auth::id();
        $info =Doctor::where('user_id',$id)->get();


        return view('doctors.show',
        [
            'infos' => $info,]
    );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $id=Auth::id();

        $info = Doctor::where('user_id',$id)->get();
        $specialities = Specialitie::select('name','description')->get();

        return view('doctors.edit',[
            'doctor' => $info,
            'specialities'=> $specialities
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data=[];
        $data =  $request->all();
        $user_id = Auth::id();
        User::find($user_id)->update([
            'email' => $data['email']
        ]);
        
        

        /*    
      $specialitie = $data['specialitie_name'];
      $specialitie_id= Specialitie::select('id')->where('name',$specialitie)->first();
      $specialitie_array =['specialitie_id'=>$specialitie_id->id,'doctor_id'=>$user_id];
      dd($specialitie_array);


        DoctorSpecialitie::where([
            'specialitie_id',$specialitie_id->id,
            'doctor_id' , $user_id
        ])->create($specialitie_array);*/
        
        unset($data['email']);
        //unset($data['specialitie_name']);
        unset($data['_token']);
        
        Doctor::where('user_id',$user_id)->update($data);
        //dd($data,$user_id);
        return redirect('/doctors/overview')
            ->with('success', 'Product updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        //
    }

    public function career(Doctor $doctor)
    {
        return view('doctors.career');
    }

    public function messages(Doctor $doctor)
    {
        return view('doctors.messages');
    }

    public function reply(Doctor $doctor)
    {
        return view('doctors.reply');
    }

    public function send(Doctor $doctor)
    {
        return view('doctors.send');
    }
    function private (Doctor $doctor) {
        return view('doctors.pvchat');
    }
    public function drawer(Doctor $doctor)
    {
        return view('doctors.drawer');
    }
    public function events(Doctor $doctor)
    {

        $id=Auth::id();

        $doc_id=Doctor::select('id')->where('user_id',$id)->first();
           // $data = $request->all();
        // $data = request()->all();
        $dateToday = new \DateTime(date("Y-m-d"));

        $patients = Consultation::where(
            'doctor_id',$doc_id->id
        )->get();

     //dd($patient->patient->first_name);
        $events_array = [];        
        foreach ($patients as $patient) {
            $color = '#378006';
            $date = $patient->consultation_date;      
            $event = [
                "id" => $patient->id,
                "title" =>$patient->patient->first_name." ".$patient->patient->last_name,
                "start" => $date,
                "eventColor" => $color
            ];
            array_push($events_array,$event);            
        }
        return response()->json($events_array);
        //return response(view('doctors.calendar',[response()->json($events_array)]));
        
    }
    public function calendar(Doctor $doctor)
    {

        
        return view('doctors.calendar');
    }

    
    public function patient_info(Doctor $doctor,$id)
    {
        $patient_info = Consultation::where(
            'id',$id
        )->first();
     //  dd($patient_info->doctor_id);
        $uid = $patient_info->patient_id;
        $user_id = Patient::
            where('id', $uid)
            ->first();
        $consultations=Consultation::where([
            'patient_id'=>$uid,
            'doctor_id'=>$patient_info->doctor_id
        ])->get();
       $count= $consultations->count();
      // dd($consultations->count());
        $email= User::select('email')->where('id',$user_id->user_id)->first();    
        return view('doctors.patient_info',[
            'patient_info'=>$user_id,
            'consultations'=>$consultations,
            'count' => $count,
            'id',
            'email'=>$email
        ]);
        
    }
  
    public function patients_list(Doctor $doctor)
    {
        $id=Auth::id();

        $doc_id=Doctor::select('id')->where('user_id',$id)->first();


        $patients_list= Consultation::where(
            'doctor_id',$doc_id->id
        )->get();
            
     // dd($patients_list->doctor->first_name);

        return view('doctors.patients_list',

            ['patients_list'=>$patients_list]  );
    }
    public function rapport(Doctor $doctor)
    {
        
        return view('doctors.rapport');
    }
    public function consultation(Doctor $doctor)
    {
        return view('doctors.consultation');
    }
    

}
