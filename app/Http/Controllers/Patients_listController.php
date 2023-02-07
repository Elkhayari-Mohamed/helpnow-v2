<?php

namespace App\Http\Controllers;

use App\Models\Patientlist;
use Illuminate\Http\Request;

class Patients_listController extends Controller
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
        $request->validate([
            'fullname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);

        $Patientlist = Patientlist::create([
            'fullname' => $request->name,
            'email' => $request->email,
            

        ]);

       
        return redirect(RouteServiceProvider::HOME);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patientlist  $patientlist
     * @return \Illuminate\Http\Response
     */
    public function show(Patientlist $patientlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patientlist  $patientlist
     * @return \Illuminate\Http\Response
     */
    public function edit(Patientlist $patientlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patientlist  $patientlist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patientlist $patientlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patientlist  $patientlist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patientlist $patientlist)
    {
        //
    }
}
