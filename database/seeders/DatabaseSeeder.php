<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\User::factory(10)->create();
        \App\Models\Product::factory(20)->create();
        \App\Models\CustomProduct::factory(20)->create();
        \App\Models\Image::factory(40)->create();
        \App\Models\Address::factory(40)->create();
        \App\Models\Order::factory(20)->create();
        \App\Models\OrderProduct::factory(20)->create();
        \App\Models\Transaction::factory(20)->create();
    }
}
