<?php

use App\Models\BrandCollectionProductStock;
use Illuminate\Database\Seeder;

class BrandCollectionProductStockTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BrandCollectionProductStock::create(['id_product' => 1, 'id_platform' => 1, 'id_size' => 1, 'id_color' => 2, 'id_print' => NULL, 'stock' => 25]);
        BrandCollectionProductStock::create(['id_product' => 1, 'id_platform' => 1, 'id_size' => 2, 'id_color' => 2, 'id_print' => NULL, 'stock' => 35]);
        BrandCollectionProductStock::create(['id_product' => 1, 'id_platform' => 1, 'id_size' => 1, 'id_color' => NULL, 'id_print' => 1, 'stock' => 45]);
        BrandCollectionProductStock::create(['id_product' => 1, 'id_platform' => 1, 'id_size' => 1, 'id_color' => NULL, 'id_print' => 2, 'stock' => 45]);
        BrandCollectionProductStock::create(['id_product' => 1, 'id_platform' => 1, 'id_size' => 2, 'id_color' => NULL, 'id_print' => 1, 'stock' => 20]);
        BrandCollectionProductStock::create(['id_product' => 1, 'id_platform' => 1, 'id_size' => 3, 'id_color' => NULL, 'id_print' => 1, 'stock' => 20]);
    }
}
