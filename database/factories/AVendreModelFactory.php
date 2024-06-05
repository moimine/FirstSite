<?php

namespace Database\Factories;

use App\Models\AVendreModel;
use Database\Factories\AvendreFactory;
use Illuminate\Database\Eloquent\Factories\Factory;


class AvendreModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = AVendreModel::class;


    public function definition(): array
    {
        return [
            'name' => $this->faker->words(3, true),
            'description' => $this->faker->paragraph,
            'photo' => 'assets/logo.jpeg' 
        ];
    }
}