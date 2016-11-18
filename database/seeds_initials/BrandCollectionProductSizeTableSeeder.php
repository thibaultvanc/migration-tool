<?php

use App\Models\BrandCollectionProductSize;
use Illuminate\Database\Seeder;

class BrandCollectionProductSizeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BrandCollectionProductSize::create(['id_product' => 1, 'id_size' => 1, 'quantity' => 2, 'ref' => 'Ref1-18']);
        BrandCollectionProductSize::create(['id_product' => 1, 'id_size' => 2, 'quantity' => 2, 'ref' => 'Ref1-19']);
        BrandCollectionProductSize::create(['id_product' => 1, 'id_size' => 3, 'quantity' => 2, 'ref' => 'Ref1-20']);
        BrandCollectionProductSize::create(['id_product' => 2, 'id_size' => 1]);
        BrandCollectionProductSize::create(['id_product' => 2, 'id_size' => 2]);
        BrandCollectionProductSize::create(['id_product' => 2, 'id_size' => 3]);
    }
}
