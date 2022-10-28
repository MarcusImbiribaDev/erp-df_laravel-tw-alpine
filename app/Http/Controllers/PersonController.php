<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Http\Requests\StorePersonRequest;
use App\Http\Requests\UpdatePersonRequest;
use App\Enums\SexEnum;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $people = Person::all()->sortBy('id');
        return view('person.index', ['people' => $people]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sexEnum = SexEnum::cases();
        return view('person.create', ['sexEnum' => $sexEnum]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePersonRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePersonRequest $request)
    {
        $validatedData = $request->validated();

        $person = new Person;

        $person->cpf = $validatedData["cpf"];
        $person->first_name = $validatedData["first_name"];
        $person->last_name = $validatedData["last_name"];
        $person->sex = $validatedData["sex"];

        $person->save();

        return redirect()->route('people.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Person $person
     * @return \Illuminate\Http\Response
     */
    public function show(Person $person)
    {
        return view('person.show', ['person' => $person]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Person $person
     * @return \Illuminate\Http\Response
     */
    public function edit(Person $person)
    {
        $sexEnum = SexEnum::cases();
        $data = array('person' => $person, 'sexEnum' => $sexEnum);
        return view('person.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePersonRequest  $request
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePersonRequest $request, Person $person)
    {
        $validatedData = $request->validated();

        $person->cpf = $validatedData["cpf"];
        $person->first_name = $validatedData["first_name"];
        $person->last_name = $validatedData["last_name"];
        $person->sex = $validatedData["sex"];

        $person->save();

        return redirect()->route('people.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Person $person
     * @return \Illuminate\Http\Response
     */
    public function destroy(Person $person)
    {
        $person->delete();

        return redirect()->route('people.index');
    }
}
