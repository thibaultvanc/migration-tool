<?php

use App\Models\BrandCollectionProductMaterial;
use Illuminate\Database\Seeder;

class BrandCollectionProductMaterialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BrandCollectionProductMaterial::create(['id_product' => 1, 'id_material' => 1, 'rate' => 10]);
        BrandCollectionProductMaterial::create(['id_product' => 1, 'id_material' => 5, 'rate' => 15]);
    }
}
