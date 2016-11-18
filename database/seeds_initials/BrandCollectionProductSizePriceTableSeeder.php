<?php

use App\Models\BrandCollectionProductSizePrice;
use Illuminate\Database\Seeder;

class BrandCollectionProductSizePriceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BrandCollectionProductSizePrice::create(['id_product_size' => 1, 'id_brand_currency' => 1, 'amount' => 20]);
        BrandCollectionProductSizePrice::create(['id_product_size' => 2, 'id_brand_currency' => 1, 'amount' => 25]);
        BrandCollectionProductSizePrice::create(['id_product_size' => 3, 'id_brand_currency' => 1, 'amount' => 35]);
        BrandCollectionProductSizePrice::create(['id_product_size' => 4, 'id_brand_currency' => 1, 'amount' => 35]);
        BrandCollectionProductSizePrice::create(['id_product_size' => 5, 'id_brand_currency' => 1, 'amount' => 55]);
        BrandCollectionProductSizePrice::create(['id_product_size' => 6, 'id_brand_currency' => 1, 'amount' => 75]);
    }
}
