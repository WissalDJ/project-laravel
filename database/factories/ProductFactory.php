<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'partner_id' => \App\Models\Partner::factory(),
            'name' => $this->faker->word(),
            'price' => $this->faker->randomFloat(2, 1, 100),
            'description' => $this->faker->paragraph(),
            'image' => $this->faker->imageUrl(),
            'category' => $this->faker->word(),
        ];
    }
}

