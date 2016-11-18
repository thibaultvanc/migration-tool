<?php

use App\Models\ArticleCategory;
use Illuminate\Database\Seeder;

class ArticleCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ArticleCategory::create(['idx' => 'cat_a']);
        ArticleCategory::create(['idx' => 'cat_b']);

    }
}
