<?php

use App\Models\BrandCollectionProductDescription;
use Illuminate\Database\Seeder;

class BrandCollectionProductDescriptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BrandCollectionProductDescription::create(['id_product' => 1, 'id_lang' => 1, 'description' => 'Lorem']);

    }
}
