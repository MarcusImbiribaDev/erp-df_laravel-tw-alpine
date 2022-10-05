<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Person;
use App\Models\PersonPhone;

class PersonPhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create 3 mobile phones for each person.
        Person::all()->each(function ($person) {
            PersonPhone::factory()->count(3)->create([
                'person_id' => $person->id,
            ]);
        });
    }
}
