<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Person;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Person::factory()->count(100)->create();

        // //set randon email as main email for each person.
        // Person::all()->each(function ($person) {
        //     $person->main_email_id = $person->emails->random()->id;
        //     $person->save();
        // });
        
        // Person::all()->each(function ($person) {
        //     $person->person_email_id = PersonEmail::where('person_id', $person->id)->inRandomOrder()->first()->id;
        //     $person->save();
        // });
    }
}
