<?php

use App\Models\BrandOrderProduct;
use Illuminate\Database\Seeder;

class BrandOrderProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BrandOrderProduct::create(['id_order' => 1, 'id_product' => 1, 'discount' => 5, 'tax' => 20]);
    }
}
