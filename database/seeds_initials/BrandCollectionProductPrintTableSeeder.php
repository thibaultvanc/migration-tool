<?php

use App\Models\BrandCollectionProductPrint;
use Illuminate\Database\Seeder;

class BrandCollectionProductPrintTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BrandCollectionProductPrint::create(['id_product' => 1, 'id_print' => 1]);
        BrandCollectionProductPrint::create(['id_product' => 1, 'id_print' => 3]);
    }
}
