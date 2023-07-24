<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PatientsController;
use App\Http\Controllers\ConsultationsController;

use App\Models\Ordonnance;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Consultation;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class OrdonnancesController extends Controller
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
        $patient_infos = Consultation::where(
            'id',
            $id
        )->with(['medical_record'])->get();
        //dd($patient_infos);
        // $patient_id = $patient_infos->patient_id;

        // $patient_info=Patient::where('id',$patient_id)->get();
        //dd($patient_info);

        return view('doctors.rapport', ['patient_info' => $patient_infos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        unset($request['_token']);
        $data =  $request->all();
        //  dd($data);
        $doc_id = Doctor::select('id')->where('user_id', Auth::id())->first();
        $doctor_info = Doctor::Where('id', $doc_id->id)->first();
        $email = User::select('email')->where('id', Auth::id())->first();

        Ordonnance::create([
            'consultation_id' => $request->consultation_id,
            'doctor_name' => $doctor_info->first_name . ' ' . $doctor_info->last_name,
            'patient_name' => $request->patient_name,
            'doctor_specialite' => $doctor_info->specialitie_name,
            'doctor_adresse' => $doctor_info->address . ' ' . $doctor_info->city,
            'doctor_phone' => $doctor_info->phone,
            'doctor_email' => $email->email,
            'prescription' => $request->prescription,
            'medication_name' => $request->medication_name,
            'dosage' => $request->dosage,
            'frequency' => $request->frequency,
            'duration' => $request->duration,
            'instructions' => $request->instructions,

        ]);

        $or = Ordonnance::select('id')->where('consultation_id', $request->consultation_id)->first();
        // dd($request->consultation_id);
        Ordonnance::where('consultation_id', $request->consultation_id)->update(['status' => '1']);
        //dd($or->id);
        return redirect('/doctors/Patients_list')->with('success', 'Done');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ordonnance  $ordonnance
     * @return \Illuminate\Http\Response
     */

    public function show(Ordonnance $ordonnance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ordonnance  $ordonnance
     * @return \Illuminate\Http\Response
     */
    public function edit(Ordonnance $ordonnance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ordonnance  $ordonnance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ordonnance $ordonnance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ordonnance  $ordonnance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ordonnance $ordonnance)
    {
        //
    }
}
