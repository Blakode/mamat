<?php

namespace Database\Factories;

use App\Models\CustomProduct;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Relations\Relation;

class ImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Image::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {

        $imager = $this->faker->randomElement([
            [
                'id' => Product::all()->random(),
                'type' => Product::class,
            ],
            [
                'id' => CustomProduct::all()->random(),
                'type' => CustomProduct::class,
            ]
        ]);

        return [
            'url' => $this->faker->imageUrl(400,400),
            'imager_type' => $imager['type'],
            'imager_id' => $imager['id']
        ];
    }
}
