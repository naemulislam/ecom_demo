<?php

namespace Database\Factories;

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
    public function definition(): array
    {
        $code = mt_rand(1000000, 9999999);
        return [
            'name' => $this->faker->name,
            'code' =>  $code,
            'type' => 'standard',
            'qty' => 0,
            'price' => $this->faker->randomFloat(2, 10, 100),
            'product_details' => $this->faker->paragraph,
            'discount' => $this->faker->randomElement([10, 15, 20]),
        ];
    }
}
