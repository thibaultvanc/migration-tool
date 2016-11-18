<?php

use App\Models\BrandCollectionProductCountry;
use Illuminate\Database\Seeder;

class BrandCollectionProductCountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BrandCollectionProductCountry::create(['id_product' => 1, 'id_country' => 1]);
        BrandCollectionProductCountry::create(['id_product' => 1, 'id_country' => 3]);
    }
}
