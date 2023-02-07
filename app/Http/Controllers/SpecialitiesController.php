<?php

namespace App\Http\Controllers;

use App\Models\Specialitie;
use App\Models\Doctor;
use Illuminate\Http\Request;

class SpecialitiesController extends Controller
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
     * @param  \App\Models\Specialitie  $specialitie
     * @return \Illuminate\Http\Response
     */
    public function show(Specialitie $specialitie)
    {
        $specialities = Specialitie::select('name','description')->get();
     // dd($info);

        return view('patients.specialities',[
            'specialities'=>$specialities,            
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Specialitie  $specialitie
     * @return \Illuminate\Http\Response
     */
    public function edit(Specialitie $specialitie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Specialitie  $specialitie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Specialitie $specialitie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Specialitie  $specialitie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Specialitie $specialitie)
    {
        //
    }
}
