<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Course as CourseModel;

class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'course_id' => $this->faker->randomElement(CourseModel::pluck('id')),
            'title' => $this->faker->text(200),
            'description' => $this->faker->text(255),
        ];
    }
}
