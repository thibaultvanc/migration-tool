<?php

use App\Models\BrandOrderShipment;
use Illuminate\Database\Seeder;

class BrandOrderShipmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BrandOrderShipment::create(['id_order' => 1, 'id_brand' => 1, 'id_shipper' => 1, 'ref' => 'BL-100-12-2365', 'rate' => 100, 'document_date' => '2017-10-19 13:53:38', 'shipment_date' => '2016-12-19 13:53:38', 'status' => 0]);
        BrandOrderShipment::create(['id_order' => 2, 'id_brand' => 1, 'id_shipper' => 1, 'ref' => 'BL-102-00-2302', 'rate' => 100, 'document_date' => '2017-10-19 13:53:38', 'shipment_date' => '2016-12-19 13:53:38', 'status' => 0]);
    }
}
