<?php

use App\Models\ProductCategory;
use Illuminate\Database\Seeder;

class ProductCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductCategory::create(['universe' => 'adult', 'key' => 'fashion', 'is_style' => 1]);
        ProductCategory::create(['universe' => 'adult', 'key' => 'underwear', 'is_style' => 0]);
        ProductCategory::create(['universe' => 'adult', 'key' => 'shoes', 'is_style' => 1]);
        ProductCategory::create(['universe' => 'adult', 'key' => 'accessories', 'is_style' => 1]);
        ProductCategory::create(['universe' => 'adult', 'key' => 'beauty', 'is_style' => 0]);

        ProductCategory::create(['universe' => 'design', 'key' => 'furniture', 'is_style' => 1]);
        ProductCategory::create(['universe' => 'design', 'key' => 'luminaire', 'is_style' => 1]);
        ProductCategory::create(['universe' => 'design', 'key' => 'decoration', 'is_style' => 1]);
        ProductCategory::create(['universe' => 'design', 'key' => 'lifestyle', 'is_style' => 1]);
        ProductCategory::create(['universe' => 'design', 'key' => 'textile', 'is_style' => 1]);
        ProductCategory::create(['universe' => 'design', 'key' => 'table', 'is_style' => 1]);

        ProductCategory::create(['universe' => 'kid', 'key' => 'fashion', 'is_style' => 1]);
        ProductCategory::create(['universe' => 'kid', 'key' => 'underwear', 'is_style' => 0]);
        ProductCategory::create(['universe' => 'kid', 'key' => 'shoes', 'is_style' => 1]);
        ProductCategory::create(['universe' => 'kid', 'key' => 'accessories', 'is_style' => 1]);
        ProductCategory::create(['universe' => 'kid', 'key' => 'childcare', 'is_style' => 1]);
        ProductCategory::create(['universe' => 'kid', 'key' => 'gift', 'is_style' => 1]);

        ProductCategory::create(['universe' => 'maternity', 'key' => 'fashion', 'is_style' => 1]);
        ProductCategory::create(['universe' => 'maternity', 'key' => 'underwear', 'is_style' => 0]);
        ProductCategory::create(['universe' => 'maternity', 'key' => 'shoes', 'is_style' => 1]);
        ProductCategory::create(['universe' => 'maternity', 'key' => 'accessories', 'is_style' => 1]);
        ProductCategory::create(['universe' => 'maternity', 'key' => 'beauty', 'is_style' => 0]);

    }
}
