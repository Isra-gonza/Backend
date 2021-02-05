<?php

namespace Database\Factories;

use App\Models\Product;
use Carbon\Carbon;
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
            'name' => $this->faker->name,
            'description' => $this->faker->sentence(10),
            'price' => $this->faker->randomNumber(3),
            'stock' => $this->faker->randomNumber(3),
            'active' => $this->faker->boolean,
            'photo' => 'url de la foto',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
