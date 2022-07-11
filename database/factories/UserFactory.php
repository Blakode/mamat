<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    private  function role($n){
        switch($n){
            case '1':
                return 'admin';
                break;
            case '2':
                return 'user';
                break;
            case '3':
                return 'sadmin';
                break; 
        }
    }

    private  function gender($n){
        switch($n){
            case '1':
                return 'male';
                break;
            case '2':
                return 'female';
                break;
            case '3':
                return 'Rather not say';
                break; 
        }
    }
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // random no btm 1-3 
        $random = rand(1,3) ;
        $role = $this->role($random);
        $gender = $this->gender($random); 
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'gender' => $gender,
            'role' => $role,
            'avatar' => $this->faker->imageUrl(100,100,$category = null, $randomize = true, $word = null, $gray = false),
            'phone' => $this->faker->phoneNumber(),

        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
