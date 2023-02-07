<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Doctor;
use App\Models\Consultation;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function live(Request $request,$link)
    {
        $info_d = Consultation::select('doctor_id')->where('link',$link)->first();
        //dd($info_d->doctor->first_name);
        $info_p = Consultation::select('patient_id')->where('link',$link)->first();


        return view('live',[
            'doctor' => $info_d,
            'patient'=> $info_p
        ]);

    }
}
