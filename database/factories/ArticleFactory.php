<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(6),
            'body' => $this->faker->paragraph(6),
            'date' => $this->faker->date(),
            'user_id' => User::inRandomOrder()->first()->id
        ];
    }
}
