<?php

use App\Models\BrandOrderProductQuantity;
use Illuminate\Database\Seeder;

class BrandOrderProductQuantityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BrandOrderProductQuantity::create(['id_order_product' => 1, 'id_size' => 1, 'id_print' => 1, 'quantity' => 15, 'price' => 35]);
        BrandOrderProductQuantity::create(['id_order_product' => 1, 'id_size' => 1, 'id_print' => 2, 'quantity' => 10, 'price' => 35]);
        BrandOrderProductQuantity::create(['id_order_product' => 1, 'id_size' => 1, 'id_color' => 2, 'quantity' => 50, 'price' => 35]);
        BrandOrderProductQuantity::create(['id_order_product' => 1, 'id_size' => 2, 'id_color' => 2, 'quantity' => 20, 'price' => 45]);
    }
}
