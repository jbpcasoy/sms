<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        return [
            "student_lrn" => "" . mt_rand(000000000000, 999999999999),
            "first_name" => $this->faker->firstName(),
            "middle_name" => $this->faker->lastName(),
            "last_name" => $this->faker->lastName(),
            "age" => random_int(18, 25),
            "year_level" => $this->faker->randomElement([
                "1ST YEAR",
                "2ND YEAR",
                "3RD YEAR",
                "4TH YEAR",
            ]),
            "section" => $this->faker->word(),
        ];
    }
}
