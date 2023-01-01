<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::all();
        return response()->json($patients);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $patient = new Patient();

        $request->validate([
            "petName"=>"required",
            "pawrent"=>"required",
            "status"=>"required",
            "breed"=>"required",
            "gender"=>"required",
            "DateOfBirth"=>"required",
            "phone"=>"required",
            "address"=>"required",
            "city"=>"required",
            "township"=>"required",
        ]);
//        return $request;
        $patient->petName = $request->petName;
        $patient->pawrent = $request->pawrent;
        $patient->status = $request->status;
        $patient->breed = $request->breed;
        $patient->gender = $request->gender;
        $patient->DateOfBirth = $request->DateOfBirth;
        $patient->phone = $request->phone;
        $patient->address = $request->address;
        $patient->city = $request->city;
        $patient->township = $request->township;

        $patient->save();

        return response()->json($patient);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patient = Patient::find($id);
        return response()->json($patient);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $patient = Patient::find($id);
        $request->validate([
            "petName"=>"required",
            "pawrent"=>"required",
            "status"=>"required",
            "breed"=>"required",
            "gender"=>"required",
            "DateOfBirth"=>"required",
            "phone"=>"required",
            "address"=>"required",
            "city"=>"required",
            "township"=>"required",
        ]);
        if ($request->petName){
            $patient->petName = $request->petName;
        }
        if ($request->pawrent){
            $patient->pawrent = $request->pawrent;
        }
        if ($request->status){
            $patient->status = $request->status;
        }
        if ($request->breed){
            $patient->breed = $request->breed;
        }
        if ($request->gender){
            $patient->gender = $request->gender;
        }
        if ($request->DateOfBirth){
            $patient->DateOfBirth = $request->DateOfBirth;

        }
        if ($request->phone){
            $patient->phone = $request->phone;
        }
        if ($request->address){
            $patient->address = $request->address;
        }
        if ($request->city){
            $patient->city = $request->city;
        }
        if ($request->township){
            $patient->township = $request->township;
        }

        $patient->update();
        return response()->json($patient);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient = Patient::find($id);
        $patient_name = $patient->petName;
        $patient->delete();
        return response()->json([]);
    }
}
