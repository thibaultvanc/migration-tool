<?php

use App\Models\BrandOrderInvoice;
use Illuminate\Database\Seeder;

class BrandOrderInvoiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BrandOrderInvoice::create(['id_order' => 1, 'ref' => 'FA-100-12-2365', 'rate' => 50, 'amount' => 550, 'status' => 1]);
    }
}
