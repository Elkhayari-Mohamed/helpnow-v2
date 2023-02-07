<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Specialitie;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
           
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'type_account'=> $request->type_account,

        ]);

        event(new Registered($user));

        Auth::login($user);
        $user =  Auth::user();
        if( $user->type_account == 'doctor'){
            
            $specialities = Specialitie::select('name','description')->get();

            return view('doctors.Complete_profile',['specialities'=> $specialities]);
        }
        else{
            \App\Models\Wallet::create([
                'patient_id' => $user->id
            ]);
   
            return view('patients.Complete_profile');
        }
      
    }
}
