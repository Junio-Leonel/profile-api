<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::all()->random()->id,
            'photo' => 'https://source.unsplash.com/random',
            'cover' => 'https://source.unsplash.com/random',
            'publication' => $this->faker->numberBetween(0, 100),
            'followers' => $this->faker->numberBetween(0, 100),
            'following' => $this->faker->numberBetween(0, 100),
            'description' => fake()->text(),
        ];
    }
}
