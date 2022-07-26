<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'photo' => 'https://source.unsplash.com/random',
            'name' => $this->faker->name(),
            'description' => $this->faker->text(500),
            'price' => $this->faker->numberBetween(10, 500)
        ];
    }
}
