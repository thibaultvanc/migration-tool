<?php

use App\Models\Buyer;
use Illuminate\Database\Seeder;

class BuyerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Buyer::create(['id_user' => 9, 'id_address' => 1, 'name' => 'MyBuyer', 'business_name' => 'myBusinessName', 'vat_number' => '00076506510651']);
        Buyer::create(['id_user' => 10, 'id_address' => 1, 'name' => 'White SARL', 'vat_number' => '00076506510651']);
    }
}
