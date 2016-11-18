<?php

use App\Models\BrandTax;
use Illuminate\Database\Seeder;

class BrandTaxTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BrandTax::create(['id_brand' => 1, 'rate' => 5]);
        BrandTax::create(['id_brand' => 1, 'rate' => 10]);
        BrandTax::create(['id_brand' => 1, 'rate' => 15]);
        BrandTax::create(['id_brand' => 1, 'rate' => 20]);
    }
}
