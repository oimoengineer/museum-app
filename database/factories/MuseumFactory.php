<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Museum>
 */
class MuseumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'overview' => Str::random(100),
            'URL' => 'https://' . Str::random(10),
            'address' => Str::random(20),
            'image' => Str::random(20), 
            'prefecture_id' => fake()->numberBetween(1, 47),
            'category_id' => fake()->numberBetween(1, 3),
            'admin_id' => 1,
        ];
    }
}
