<?php

use App\Models\BrandCollectionProductColor;
use Illuminate\Database\Seeder;

class BrandCollectionProductColorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BrandCollectionProductColor::create(['id_product' => 1, 'id_color' => 1]);
        BrandCollectionProductColor::create(['id_product' => 1, 'id_color' => 3]);
    }
}
