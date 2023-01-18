<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class UFPclassFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public static $counter = -1;

    public function definition()
    {
        $classes = array('Applied statistics', 'Communication Grammar', 'English', 'Introduction to Algorithms and Programming', 'Mathematics I', 'Information Systems', 'Systems Analysis', 'Applied Electronics', 'Physics', 'Mathematics II', 'Algorithms and Data Structures I', 'Numerical Analysis', 'Computer Architecture', 'Programming Languages I',);

        $this::$counter += 1;

        return [
            'name' => $classes[$this::$counter],
        ];
    }
}
