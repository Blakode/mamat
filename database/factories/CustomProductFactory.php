<?php

namespace Database\Factories;

use App\Models\CustomProduct;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CustomProduct::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new \FakerRestaurant\Provider\en_US\Restaurant($faker)); 
        return [
        
            'title' => rand(0,1)? $faker->beverageName(): $faker->foodName(),
            'description' => $this->faker->sentence(8,true),
            'category' => rand(0,1)?'food': 'drink',
            'qty' => rand(1,10),
            'amount' => $this->faker->randomNumber(3),
            'user_id' => rand(1,10),
        ];
    }
}
