<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Doctor;
use App\Models\Wallet;
use App\Models\Consultation;
use App\Models\Ordonnance;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;


class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $id = Patient::select('id')->where('user_id', $user_id)->first();

        $wallet = Wallet::select('balance')->where('patient_id', $user_id)->first();
        //dd($wallet);
        $consultations = Consultation::where('patient_id', $id->id)->get();
        //  dd($consultations);

        return view('patients.index', [
            'consultations' => $consultations,
            'balance' => $wallet->balance,
            'patient_id' => $id->id
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $Patient)
    {
        $data = [];
        $data =  $Patient->all();
        $balance = $data["balance"];
        unset($data['balance']);

        Patient::create([
            'user_id'      => $Patient->Auth::user()->id,
            'first_name'   => $Patient->first_name,
            'last_name'    => $Patient->last_name,
            'Phone'        => $Patient->phone,
            'city'         => $Patient->city,
            'country'      => $Patient->country,
            'address'      => $Patient->address,
            'age'          => $Patient->age,
            'gender'       => $Patient->gender,
            'notes'        => $Patient->notes,

        ]);
        Wallet::select('balance')->where('patient_id', Auth::id())->update(['balance' => $balance]);
        return redirect('/patients/ourdoctors');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patient  $Patient
     * @return \Illuminate\Http\Response
     */

    public function show(Patient $Patient)
    {

        $user_id = Auth::id();
        $info = Patient::where('user_id', $user_id)->get();

        return view(
            'patients.show',
            [
                'infos' => $info,
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patient  $Patient
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {

        $user_id = Auth::id();
        $info = Patient::where('user_id', $user_id)->get();
        return view('patients.edit', [
            'infos' => $info,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patient  $Patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $Patient)
    {
        $data = [];
        $data =  $request->all();
        $user_id = Auth::id();

        User::find($user_id)->update([
            'email' => $data['email']
        ]);
        unset($data['email']);
        unset($data['specialitie']);
        unset($data['_token']);
        unset($data['avatar']);
        unset($data['avatar_remove']);


        Patient::where('user_id', $user_id)->update($data);
        //dd($data,$user_id);
        return redirect('/patients/overview')
            ->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $Patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $Patient)
    {
        //
    }

    public function career(Patient $Patient)
    {
        return view('patients.career');
    }

    public function messages(Patient $Patient)
    {
        return view('patients.messages');
    }

    public function reply(Patient $Patient)
    {
        return view('patients.reply');
    }

    public function send(Patient $Patient)
    {
        return view('patients.send');
    }
    public function private(Patient $Patient)
    {
        return view('patients.pvchat');
    }
    public function drawer(Patient $Patient)
    {
        return view('patients.drawer');
    }

    public function events(Patient $patient)
    {

        $id = Auth::id();
        $pat_id = Patient::select('id')->where('user_id', $id)->first();
        $dateToday = new \DateTime(date("Y-m-d"));
        $consultations = Consultation::where(
            'patient_id',
            $pat_id->id
        )->get();

        //dd($patient->patient->first_name);
        $events_array = [];
        foreach ($consultations as $consultation) {
            $color = '#378006';
            $date = $consultation->consultation_date;
            $event = [
                "id" => $consultation->id,
                "title" => $consultation->patient->first_name . " " . $consultation->patient->last_name,
                "start" => $date,
                "eventColor" => $color
            ];
            array_push($events_array, $event);
        }
        return response()->json($events_array);
    }

    public function calendar(Patient $Patient)
    {
        return view('patients.calendar');
    }
    public function team(Patient $Patient)
    {
        return view('patients.team');
    }
    public function bill(Patient $Patient)
    {
        return view('patients.bill');
    }

    public function ourdoctors(Patient $Patient)
    {

        $list = Doctor::with('reviews')->get();

        return view('patients.ourdoctors', ['listdoctors' => $list]);
    }

    public function doctorsbyspecialitie($name)
    {
        //dd($specialitie_name);
        $list = Doctor::where('specialitie_name', $name)->get();
        //  dd($list);

        return view(
            'patients.doctorsbyspecialitie',
            ['listdoctors' => $list]
        );
    }

    public function doctorcontact($id)
    {
        $doctor = Doctor::where('id', $id);
        if ($doctor->count() > 0) {
            $doctor = $doctor->first();
        } else {
            return response('error');
        }
        $ids = Auth::id();
        $user_id = Patient::select('id')->where('user_id', $ids)->first();

        $consultations = Consultation::where([
            'patient_id' => $user_id->id,
            'doctor_id' => $doctor->id
        ])->get();
        if (Consultation::select('id')->where([
            'patient_id' => $user_id->id,
            'doctor_id' => $doctor->id
        ])->first() == true) {
            $consultations_id = Consultation::select('id')->where([
                'patient_id' => $user_id->id,
                'doctor_id' => $doctor->id
            ])->first();


            $ordonnances = Ordonnance::where('consultation_id', $consultations_id->id)->first();
        } else {
            $ordonnances = null;
        }
        // dd($ordonnances);

        return view(
            'patients.doctor_contact',
            ['consultations' => $consultations],

            compact('doctor', 'ordonnances')
        );
    }

    public function ordonnance(Patient $Patient, $id)
    {


        $ordonnance_info = Ordonnance::where('consultation_id', $id)->get();
        // dd($ordonnance_info);
        return view('patients.ordonnance', ['ordonnance_info' => $ordonnance_info]);
    }
}
