<?php

use App\Models\BrandCollectionProductSuggestion;
use Illuminate\Database\Seeder;

class BrandCollectionProductSuggestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BrandCollectionProductSuggestion::create(['id_product' => 1, 'id_suggestion' => 2]);
        BrandCollectionProductSuggestion::create(['id_product' => 1, 'id_suggestion' => 3]);
    }
}
