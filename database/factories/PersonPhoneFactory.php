<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PersonPhone>
 */
class PersonPhoneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'mobile_operator' => fake()->randomElement(['Claro', 'Oi', 'Tim', 'Vivo']),
            'ddd' => fake('pt_BR')->areaCode(),
            'phone_number' => fake('pt_BR')->cellphone(false, true),
        ];
    }
}
