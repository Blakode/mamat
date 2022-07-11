<?php

namespace Database\Seeders;

use App\Models\CustomProduct;
use Illuminate\Database\Seeder;

class CustomProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CustomProduct::factory('20')->create(); 
    }
}
