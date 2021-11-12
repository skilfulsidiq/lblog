<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'image' => $this->faker->imageUrl(350,220),
            'description'=> $this->faker->text(),
            'category_id'=> $this->faker->numberBetween(1,3)
        ];

    }
}
