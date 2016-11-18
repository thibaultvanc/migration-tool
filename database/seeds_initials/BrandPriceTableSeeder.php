<?php

use App\Models\BrandPrice;
use Illuminate\Database\Seeder;

class BrandPriceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BrandPrice::create(['id_price_group' => 1, 'id_size' => 1]);
        BrandPrice::create(['id_price_group' => 1, 'id_size' => 2]);
        BrandPrice::create(['id_price_group' => 1, 'id_size' => 3]);
        BrandPrice::create(['id_price_group' => 1, 'id_size' => 4]);
        BrandPrice::create(['id_price_group' => 1, 'id_size' => 5]);
        BrandPrice::create(['id_price_group' => 1, 'id_size' => 6]);
        BrandPrice::create(['id_price_group' => 1, 'id_size' => 7]);

        BrandPrice::create(['id_price_group' => 2, 'id_size' => 8]);
        BrandPrice::create(['id_price_group' => 2, 'id_size' => 9]);
        BrandPrice::create(['id_price_group' => 2, 'id_size' => 10]);
        BrandPrice::create(['id_price_group' => 2, 'id_size' => 11]);
        BrandPrice::create(['id_price_group' => 2, 'id_size' => 12]);
    }
}
