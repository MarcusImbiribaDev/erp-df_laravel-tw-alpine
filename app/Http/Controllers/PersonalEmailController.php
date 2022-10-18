<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePersonEmailRequest;
use App\Http\Requests\UpdatePersonEmailRequest;
use App\Models\PersonalEmail;

class PersonalEmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personalEmails = PersonalEmail::all()->sortBy('id');
        return view('personal_email.index', ['personalEmails' => $personalEmails]);
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
     * @param  \App\Http\Requests\StorePersonEmailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePersonEmailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PersonEmail  $personEmail
     * @return \Illuminate\Http\Response
     */
    public function show(PersonalEmail $personEmail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PersonEmail  $personEmail
     * @return \Illuminate\Http\Response
     */
    public function edit(PersonalEmail $personEmail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePersonEmailRequest  $request
     * @param  \App\Models\PersonEmail  $personEmail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePersonEmailRequest $request, PersonalEmail $personEmail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PersonEmail  $personEmail
     * @return \Illuminate\Http\Response
     */
    public function destroy(PersonalEmail $personEmail)
    {
        //
    }
}
