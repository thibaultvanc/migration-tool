<?php

use App\Models\BrandBuyer;
use Illuminate\Database\Seeder;

class BrandBuyerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BrandBuyer::create(['id_brand' => 1, 'id_buyer' => 1, 'ref' => 'refBuyer']);
    }
}
