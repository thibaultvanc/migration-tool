<?php

use App\Models\BrandImageProduct;
use Illuminate\Database\Seeder;

class BrandImageProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BrandImageProduct::create(['id_dir' => 1, 'name' => 'Image 1', 'file_large' => 'product.jpg', 'file_medium' => 'product.jpg', 'file_small' => 'product.jpg', 'status' => 1]);
        BrandImageProduct::create(['id_dir' => 1, 'name' => 'Image 2', 'file_large' => 'product.jpg', 'file_medium' => 'product.jpg', 'file_small' => 'product.jpg', 'status' => 1]);
        BrandImageProduct::create(['id_dir' => 2, 'name' => 'Image 3', 'file_large' => 'product.jpg', 'file_medium' => 'product.jpg', 'file_small' => 'product.jpg', 'status' => 1]);
    }
}
