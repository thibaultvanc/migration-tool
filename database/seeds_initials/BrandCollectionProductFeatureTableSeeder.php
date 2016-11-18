<?php

use App\Models\BrandCollectionProductFeature;
use Illuminate\Database\Seeder;

class BrandCollectionProductFeatureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BrandCollectionProductFeature::create(['id_product' => 1, 'id_feature' => 3]);
        BrandCollectionProductFeature::create(['id_product' => 1, 'id_feature' => 4]);
        BrandCollectionProductFeature::create(['id_product' => 1, 'id_feature' => 6]);
        BrandCollectionProductFeature::create(['id_product' => 2, 'id_feature' => 5]);
        BrandCollectionProductFeature::create(['id_product' => 2, 'id_feature' => 2]);
    }
}
