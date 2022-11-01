<?php

namespace App\Http\Controllers;

use App\Models\PersonalEmail;
use App\Http\Requests\StorePersonEmailRequest;
use App\Http\Requests\UpdatePersonEmailRequest;
use App\Enums\ContactTypeEnum;

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
        $contactTypeEnum = ContactTypeEnum::cases();
        return view('personal_email.create', ['contactTypeEnum' => $contactTypeEnum]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePersonEmailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePersonEmailRequest $request)
    {
        $validatedData = $request->validated();

        $personalEmail = new PersonalEmail;

        $personalEmail->person_id = $validatedData["person_id"];
        $personalEmail->email = $validatedData["email"];
        $personalEmail->type = $validatedData["type"];

        $personalEmail->save();

        return redirect()->route('personal_emails.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PersonEmail  $personalEmail
     * @return \Illuminate\Http\Response
     */
    public function show(PersonalEmail $PersonalEmail)
    {
        return view('personal_email.show', ['personalEmail' => $PersonalEmail]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PersonEmail  $personalEmail
     * @return \Illuminate\Http\Response
     */
    public function edit(PersonalEmail $personalEmail)
    {
        $contactTypeEnum = ContactTypeEnum::cases();
        $data = array('personalEmail' => $personalEmail, 'contactTypeEnum' => $contactTypeEnum);
        return view('personal_email.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePersonEmailRequest  $request
     * @param  \App\Models\PersonEmail  $personalEmail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePersonEmailRequest $request, PersonalEmail $personalEmail)
    {
        $validatedData = $request->validated();

        $personalEmail->person_id = $validatedData["person_id"];
        $personalEmail->email = $validatedData["email"];
        $personalEmail->type = $validatedData["type"];

        $personalEmail->save();

        return redirect()->route('personal_emails.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PersonEmail  $personalEmail
     * @return \Illuminate\Http\Response
     */
    public function destroy(PersonalEmail $personalEmail)
    {
        $personalEmail->delete();

        return redirect()->route('personal_emails.index');
    }
}
