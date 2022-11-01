<?php

namespace App\Http\Controllers;

use App\Models\PersonalPhone;
use App\Http\Requests\StorePersonPhoneRequest;

class PersonalPhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personalPhones = PersonalPhone::all()->sortBy('id');
        return view('personal_phone.index', ['personalPhones' => $personalPhones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personal_phone.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePersonPhoneRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePersonPhoneRequest $request)
    {
        $validatedData = $request->validated();

        $personalPhone = new PersonalPhone;

        $personalPhone->person_id = $validatedData["person_id"];
        $personalPhone->mobile_operator = $validatedData["mobile_operator"];
        $personalPhone->ddd = $validatedData["ddd"];
        $personalPhone->phone_number = $validatedData["phone_number"];

        $personalPhone->save();

        return redirect()->route('personal_phones.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
