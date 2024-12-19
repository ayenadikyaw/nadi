<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blogs>
 */
class BlogsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->text(10),
            'subtitle' => fake()->sentence(3),
            'content' => fake()->paragraph(),
            'image' => 'https://picsum.photos/200/300',
            'category' => fake()->randomElement(['Technology', 'Business', 'Health', 'Education', 'Travel', 'Lifestyle']),
            'status' => fake()->randomElement(['Draft', 'Published']),
        ];
    }
}
