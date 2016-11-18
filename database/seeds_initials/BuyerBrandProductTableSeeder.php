<?php

use App\Models\BuyerBrandProduct;
use Illuminate\Database\Seeder;

class BuyerBrandProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BuyerBrandProduct::create(['id_buyer' => 1, 'id_brand' => 1, 'id_product' => 1]);
        BuyerBrandProduct::create(['id_buyer' => 1, 'id_brand' => 1, 'id_product' => 2]);
        BuyerBrandProduct::create(['id_buyer' => 1, 'id_brand' => 1, 'id_product' => 3]);
    }
}
