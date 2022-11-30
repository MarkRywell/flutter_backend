<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Position;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {   
        $section = 'R' . rand(1, 14);

        return [
            'id' => fake()->randomNumber(9, true),
            'name' => fake('en_US')->name(),
            'year' => fake()->numberBetween(1, 5),
            'section' => $section,
            'position_id' => Position::inRandomOrder()->first()

        ];
    }
}
