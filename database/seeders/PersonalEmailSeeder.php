<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Person;
use App\Models\PersonalEmail;

class PersonalEmailSeeder extends Seeder
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
            PersonalEmail::factory()->count(3)->create([
                'person_id' => $person->id,
            ]);
        });

        //set randon email as main email for each person.
        Person::all()->each(function ($person) {
            $person->personal_email_id = PersonalEmail::where('person_id', $person->id)->inRandomOrder()->first()->id;
            $person->save();
        });
    }
}
