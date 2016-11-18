<?php

use App\Models\BrandCollectionProduct;
use Illuminate\Database\Seeder;

class BrandCollectionProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BrandCollectionProduct::create(['id_collection' => 1, 'id_manufacturer' => 1, 'id_size_group' => 1, 'name' => 'Product 1', 'ref' => 'REF1', 'tag' => 'bio,smart,boy', 'weight' => 50, 'is_bio' => 1, 'status' => 1]);
        BrandCollectionProduct::create(['id_collection' => 2, 'id_manufacturer' => 1, 'id_size_group' => 1, 'name' => 'Product 2', 'ref' => 'REF2', 'status' => 1]);
        BrandCollectionProduct::create(['id_collection' => 1, 'id_manufacturer' => 1, 'name' => 'Product 3', 'ref' => 'REF3', 'status' => 0]);
        BrandCollectionProduct::create(['id_collection' => 1, 'id_manufacturer' => 1, 'name' => 'Product 4', 'ref' => 'REF4', 'is_bio' => 1, 'status' => 1]);
    }
}
