<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blogspot>
 */
class BlogspotFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence(7);
        return [
            'title' => $title,
            'author' => fake()->name(),
            'slug' =>  Str::slug($title),
            'body' => fake()->text(200)   
        ];
    }
}
