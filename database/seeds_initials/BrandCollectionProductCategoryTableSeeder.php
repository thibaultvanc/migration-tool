<?php

use App\Models\BrandCollectionProductCategory;
use Illuminate\Database\Seeder;

class BrandCollectionProductCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BrandCollectionProductCategory::create(['id_product' => 1, 'id_category' => 12, 'id_category_sub' => 79]);

    }
}
