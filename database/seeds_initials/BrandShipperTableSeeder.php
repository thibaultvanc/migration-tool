<?php

use App\Models\BrandShipper;
use Illuminate\Database\Seeder;

class BrandShipperTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BrandShipper::create(['id_brand' => 1, 'name' => 'DHL', 'url_tracking' => 'http://www.google.com', 'status' => 1]);
    }
}
