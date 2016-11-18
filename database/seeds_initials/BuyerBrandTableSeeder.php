<?php

use App\Models\BuyerBrand;
use Illuminate\Database\Seeder;

class BuyerBrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BuyerBrand::create(['id_buyer' => 1, 'id_brand' => 1]);
    }
}
