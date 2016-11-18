<?php

use App\Models\BuyerAddress;
use Illuminate\Database\Seeder;

class BuyerAddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BuyerAddress::create(['id_buyer' => 1, 'id_address' => 1, 'id_phone' => 1, 'label' => 'HeadQuarter', 'name' => 'Mr Jones', 'email' => 'jones@gmail.com', 'is_default' => 1]);
        BuyerAddress::create(['id_buyer' => 2, 'id_address' => 1, 'id_phone' => 1, 'label' => 'HeadQuarter', 'name' => 'Mr Jones', 'email' => 'jones@gmail.com', 'is_default' => 1]);
    }
}
