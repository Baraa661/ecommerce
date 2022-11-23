<?php

namespace Database\Factories;
use App\Models\Category;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category_id' => Category::all()->random()->id,
            'name' => $this->faker->name(),
            'price' => $this->faker->numberBetween(0, 100),
            'description' => $this->faker->paragraph(1),
            'quantity' => $this->faker->numberBetween(0, 20),

            'image' => $this->faker->imageUrl($width = 440, $height = 680),
           
        ];
    }
}
