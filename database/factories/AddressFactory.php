<?php

namespace Database\Factories;

use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Address::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'house_no' => rand(1,29),
            'user_id' => rand(1,10),
            'city' => $this->faker->city(),
            'road' => $this->faker->streetName(),
            'landmark' => $this->faker->word(),
            'street' => $this->faker->streetAddress(),
            'postal_code' => $this->faker->randomNumber(5),
        ];
    }
}
