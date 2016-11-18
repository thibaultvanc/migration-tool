<?php

use App\Models\BrandCurrency;
use Illuminate\Database\Seeder;

class BrandCurrencyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BrandCurrency::create(['id_brand' => 1, 'id_currency' => 106, 'id_incoterm' => 1, 'id_tax' => 2, 'universe' => 'kid']);
    }
}
