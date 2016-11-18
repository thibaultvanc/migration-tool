<?php

use App\Models\BrandOrderCredit;
use Illuminate\Database\Seeder;

class BrandOrderCreditTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BrandOrderCredit::create(['id_order' => 1, 'ref' => 'AV-100-12-2365', 'amount' => 550, 'status' => 1]);
    }
}
