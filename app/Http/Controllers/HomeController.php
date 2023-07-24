<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Doctor;
use App\Models\Consultation;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;
use Firebase\JWT\JWT;

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

    public function live(Request $request, $link)
    {
        $info_d = Consultation::select('doctor_id')->where('link', $link)->first();
        //dd($info_d->doctor->first_name);
        $info_p = Consultation::select('patient_id')->where('link', $link)->first();


        return view('live', [
            'doctor' => $info_d,
            'patient' => $info_p
        ]);
    }


    public function generateJWTToken()
    {
        $API_KEY = '2451357a-9560-437a-9a09-1c0d62a4b98a';  // Assuming you have your API_KEY stored in environment variables
        $SECRET = '6d3f5a89d62b55bdfeeaa267458835b654f6371fc757471a4f42c09c6643d930';    // Assuming you have your SECRET stored in environment variables

        $payload = array(
            "apikey" => $API_KEY,
            "permissions" => ["allow_join"], // `ask_join` || `allow_mod`
            "version" => 2,
            "roles" => ['CRAWLER'],
            "exp" => time() + (60 * 120),   // Expires in 120 minutes
        );

        $jwt = JWT::encode($payload, $SECRET, 'HS256');

        // Now return this token to the client in the response of a API request
        return response()->json(['token' => $jwt]);
    }
}
