<?php

namespace App\Http\Controllers;

use App\Models\PersonalPhone;
use App\Http\Requests\StorePersonPhoneRequest;
use App\Enums\ContactTypeEnum;
use App\Enums\MobileOperatorEnum;

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
        $contactTypeEnum = ContactTypeEnum::cases();
        $mobileOperatorEnum = MobileOperatorEnum::cases();
        $data = array('contactTypeEnum' => $contactTypeEnum, 'mobileOperatorEnum' => $mobileOperatorEnum);

        return view('personal_phone.create', $data);
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
        $personalPhone->type = $validatedData["type"];

        $personalPhone->save();

        return redirect()->route('personal_phones.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PersonalPhone  $personalPhone
     * @return \Illuminate\Http\Response
     */
    public function show(PersonalPhone $personalPhone)
    {
        return view('personal_phone.show', ['personalPhone' => $personalPhone]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PersonalPhone  $personalPhone
     * @return \Illuminate\Http\Response
     */
    public function edit(PersonalPhone $personalPhone)
    {
        $contactTypeEnum = ContactTypeEnum::cases();
        $mobileOperatorEnum = MobileOperatorEnum::cases();
        $data = array(
            'personalPhone' => $personalPhone,
            'contactTypeEnum' => $contactTypeEnum,
            'mobileOperatorEnum' => $mobileOperatorEnum
        );

        return view('personal_phone.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\StorePersonPhoneRequest  $request
     * @param  \App\Models\PersonalPhone  $personalPhone
     * @return \Illuminate\Http\Response
     */
    public function update(StorePersonPhoneRequest $request, PersonalPhone $personalPhone)
    {
        $validatedData = $request->validated();

        $personalPhone->person_id = $validatedData["person_id"];
        $personalPhone->mobile_operator = $validatedData["mobile_operator"];
        $personalPhone->ddd = $validatedData["ddd"];
        $personalPhone->phone_number = $validatedData["phone_number"];
        $personalPhone->type = $validatedData["type"];

        $personalPhone->save();

        return redirect()->route('personal_phones.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PersonalPhone  $personalPhone
     * @return \Illuminate\Http\Response
     */
    public function destroy(PersonalPhone $personalPhone)
    {
        $personalPhone->delete();

        return redirect()->route('personal_phones.index');
    }
}
