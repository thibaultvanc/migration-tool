<?php

use App\Models\BrandOrder;
use Illuminate\Database\Seeder;

class BrandOrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BrandOrder::create(['id_brand' => 1, 'id_brand_currency' => 1, 'id_brand_user' => 1, 'id_buyer' => 1, 'id_buyer_address' => 1, 'id_platform' => 1, 'universe' => 'kid', 'type' => 'immediate', 'ref' => 'ORDER1', 'amount' => 499.5, 'discount' => 10, 'transport_amount' => 250, 'transport_tax' => 20, 'payment_terms' => 'Lorem', 'payment_details' => 'Lorem', 'shipment_details' => 'Lorem', 'bank_details' => 'RIB', 'buyer_comment' => 'Paiement en 3 fois SVP', 'next_action' => 'brand', 'shipment_rate' => 50, 'invoice_rate'  => 0, 'status' => 4]);
        BrandOrder::create(['id_brand' => 1, 'id_brand_currency' => 1, 'id_buyer' => 1, 'id_buyer_address' => 1, 'id_platform' => 1, 'universe' => 'kid', 'type' => 'immediate', 'ref' => 'ORDER2', 'amount' => 2789.35, 'next_action' => 'brand', 'updated_at' => '2016-08-17 00:00:00', 'shipment_rate' => 0, 'invoice_rate'  => 0, 'status' => 3]);
        BrandOrder::create(['id_brand' => 1, 'id_brand_currency' => 1, 'id_agent' => 1, 'id_buyer_address' => 1, 'id_platform' => 1, 'id_buyer' => 1, 'universe' => 'kid', 'type' => 'immediate', 'ref' => 'ORDER3', 'amount' => 499.5, 'next_action' => 'brand', 'updated_at' => '2016-08-17 00:00:00', 'shipment_rate' => 100, 'invoice_rate'  => 100, 'status' => 3]);
    }
}
