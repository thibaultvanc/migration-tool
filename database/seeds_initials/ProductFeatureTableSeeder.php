<?php

use App\Models\ProductFeature;
use Illuminate\Database\Seeder;

class ProductFeatureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductFeature::create(['key' => 'man', 'universe' => 'adult', 'css_ico' => 'boy', 'level' => 1]);
        ProductFeature::create(['key' => 'woman', 'universe' => 'adult', 'css_ico' => 'girl', 'level' => 1]);
        ProductFeature::create(['key' => 'boy', 'universe' => 'kid', 'css_ico' => 'boy', 'level' => 1]);
        ProductFeature::create(['key' => 'girl', 'universe' => 'kid', 'css_ico' => 'girl', 'level' => 1]);
        ProductFeature::create(['key' => 'baby', 'universe' => 'kid', 'css_ico' => 'baby', 'level' => 2]);
        ProductFeature::create(['key' => 'child', 'universe' => 'kid', 'css_ico' => 'children', 'level' => 2]);
        ProductFeature::create(['key' => 'junior', 'universe' => 'kid', 'css_ico' => 'junior', 'level' => 2]);
        ProductFeature::create(['key' => 'not_all', 'universe' => 'design', 'css_ico' => 'not-kid', 'level' => 1]);
        ProductFeature::create(['key' => 'kid', 'universe' => 'design', 'css_ico' => 'kid', 'level' => 1]);
    }
}
