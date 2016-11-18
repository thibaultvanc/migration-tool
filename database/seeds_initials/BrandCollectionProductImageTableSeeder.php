<?php

use App\Models\BrandCollectionProductImage;
use Illuminate\Database\Seeder;

class BrandCollectionProductImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BrandCollectionProductImage::create(['id_product' => 1, 'id_image' => 1]);
        BrandCollectionProductImage::create(['id_product' => 2, 'id_image' => 1]);
        BrandCollectionProductImage::create(['id_product' => 3, 'id_image' => 1]);
        BrandCollectionProductImage::create(['id_product' => 4, 'id_image' => 1]);
    }
}
