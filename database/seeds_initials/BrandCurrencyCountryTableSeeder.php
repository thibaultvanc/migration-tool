<?php

use App\Models\BrandCurrencyCountry;
use Illuminate\Database\Seeder;

class BrandCurrencyCountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BrandCurrencyCountry::create(['id_brand_currency' => 1, 'id_country' => 234]);
    }
}
