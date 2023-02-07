<?php

namespace App\Http\Controllers;

use App\Models\Wallet;
use App\Models\Consultation;
use App\Models\Patient;
use App\Models\Doctor;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class WalletsController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wallet  $wallet
     * @return \Illuminate\Http\Response
     */
    public function show(Wallet $wallet ,$patient_id)
    {
        $user_id =Auth::user()->id;
        $id=Patient::select('id')->where('user_id',$user_id)->first();

        $user_id=Patient::select('user_id')->where('id',$patient_id)->first();
        if ($user_id == Null){
            
    
            // dd($id);
             $wallet=Wallet::select('balance')->where('patient_id',$user_id)->first();
            // dd($wallet);
            $consultations=Consultation::where('patient_id',$id->id)->get();
           // dd($patient->consultation);
             return view('balance',[
                 'consultations'=>$consultations,
                 'balance'=>$wallet->balance,
                 'patient_id'=>$id->id

         ]);
        }
    
       // dd($user_id);
        $wallet=Wallet::select('balance')->where('patient_id',$user_id->user_id)->first();
       // dd($wallet);
       $consultations=Consultation::where('patient_id',$patient_id)->get();
      // dd($patient->consultation);
        return view('balance',[
            'consultations'=>$consultations,
            'balance'=>$wallet->balance,
            'patient_id'=>$id->id

    ]);}


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wallet  $wallet
     * @return \Illuminate\Http\Response
     */
    public function edit(Wallet $wallet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wallet  $wallet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wallet $wallet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wallet  $wallet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wallet $wallet)
    {
        //
    }
}
