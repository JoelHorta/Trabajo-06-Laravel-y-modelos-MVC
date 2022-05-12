<?php

namespace Database\Factories;

use App\Models\Product;
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

     protected $model = Product::class; 

    public function definition()
    {
        return [
            'name'=> $this->faker->userName,
            'description'=> $this->faker->realText(),
            'price'=> 20,
            'stock'=> 20,
            'status'=> $this->faker->shuffleString(),
            'garantia'=> true,
            'id_cart' => 1 
        ];
    }
}
