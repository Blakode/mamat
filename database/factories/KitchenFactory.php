<?php

namespace Database\Factories;

use App\Models\Kitchen;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class KitchenFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Kitchen::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'ItemName' => $this->faker->word(),
            'created_at' => now(),
            'ItemCategory' => $this->faker->words(),
            'ItemDescription' => $this->faker->catchPhrase(),
            'price' => $this->faker->numberBetween($min = 1000, $max = 9000),
            'status' =>$this->faker->boolean(),
        
        ];
    }
}
