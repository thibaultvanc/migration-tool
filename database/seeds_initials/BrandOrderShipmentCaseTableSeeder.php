<?php

use App\Models\BrandOrderShipmentCase;
use Illuminate\Database\Seeder;

class BrandOrderShipmentCaseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BrandOrderShipmentCase::create(['id_shipment' => 1, 'tracking' => '1487-4545']);
        BrandOrderShipmentCase::create(['id_shipment' => 1, 'tracking' => '277-84015']);
    }
}
