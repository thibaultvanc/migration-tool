<?php

use App\Models\BrandMessage;
use Illuminate\Database\Seeder;

class BrandMessageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BrandMessage::create(['id_brand' => 1, 'type' => 'payment_terms', 'name' => 'Msg payment terms', 'content' => 'Lorem ipsum']);
        BrandMessage::create(['id_brand' => 1, 'type' => 'payment_terms', 'name' => 'Msg payment terms 2', 'content' => 'Lorem ipsum']);
        BrandMessage::create(['id_brand' => 1, 'type' => 'payment_details', 'name' => 'Msg payment terms 2', 'content' => 'Lorem ipsum']);
        BrandMessage::create(['id_brand' => 1, 'type' => 'shipment_comment', 'name' => 'Shipment comment 1', 'content' => 'Lorem ipsum']);
    }
}
