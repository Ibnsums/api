<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $faker->word,
            'details' => $faker->paragraph,
            'price' => $faker->numberBetween(100,10000), 
            'stock' => $faker->randomDigit,
            'discount' => $faker->numberBetween(2,30), 
        ];
    }
}
