<?php

namespace App\Http\Controllers;

use App\Patient;
use Session;
use Illuminate\Http\Request;

class PatientController extends Controller
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

    public function create(Request $request)
    {
      $this->validate($request, [
        'doctor_name' => 'required|string|max:255',
        'mci_reg_no' => 'required|string|max:255',
        'address' => 'required|string|max:500',
        'mobile_no' => 'required|regex:/[0-9]{10}/',
        'hospital_no' => 'required|regex:/[0-9]{10}/',
        'facilities' => 'required|string|max:255',
        ]);
      $patients = Patient::all();
      $patient = new Patient;
      $patient->doctor_name = $request->doctor_name;
      $patient->mci_reg_no = $request->mci_reg_no;
      $patient->address = $request->address;
      $patient->mobile_no = $request->mobile_no;
      $patient->hospital_no = $request->hospital_no;
      $patient->facilities =$request->facilities;
      $patient->save();
      Session::flash('success', 'Registration done successfully!');
        return redirect('/home');
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
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        //
    }
}
