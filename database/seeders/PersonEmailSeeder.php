<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Person;
use App\Models\PersonEmail;

class PersonEmailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create 3 emails for each person.
        Person::all()->each(function ($person) {
            PersonEmail::factory()->count(3)->create([
                'person_id' => $person->id,
            ]);
        });

        //set randon email as main email for each person.
        Person::all()->each(function ($person) {
            $person->person_email_id = PersonEmail::where('person_id', $person->id)->inRandomOrder()->first()->id;
            $person->save();
        });
    }
}