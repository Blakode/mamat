<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'qty' => rand(1,10),
            'status' =>  rand(1,0)? 'pending': 'successful',
            'transaction_id' => $this->faker->swiftBicNumber(),
            'error' => null, 
            'address_id' => rand(1,20),
            'user_id' => rand(1,10),
            
        ];  
    }
}
