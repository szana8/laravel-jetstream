<?php

namespace Database\Factories;

use App\Models\Price;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PriceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Price::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_id' => Product::factory()->create(),
            'model' => 'standard',
            'unit_amount' => $this->faker->randomFloat(10),
            'currency' => $this->faker->currencyCode,
            'interval' => 1,
            'billing_scheme' => 'monthly'
        ];
    }
}
