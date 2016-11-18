<?php

use App\Models\BrandManufacturer;
use Illuminate\Database\Seeder;

class BrandManufacturerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BrandManufacturer::create(['id_brand' => 1, 'id_address' => 1, 'name' => 'myManufacturer']);
    }
}
