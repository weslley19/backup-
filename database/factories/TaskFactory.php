<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $category = Category::all()->random();

        return [
            'title' => fake()->name(),
            'due_date' => fake()->dateTimeBetween('now', '+1 year'),
            'description' => fake()->text(),
            'completed' => false,
            'user_id' => $category->user_id,
            'category_id' => $category->id
        ];
    }
}
