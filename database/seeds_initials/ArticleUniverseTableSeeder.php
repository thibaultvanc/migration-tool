<?php

use App\Models\ArticleUniverse;
use Illuminate\Database\Seeder;

class ArticleUniverseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ArticleUniverse::create(['id_article' => 1, 'universe' => 'kid']);
        ArticleUniverse::create(['id_article' => 1, 'universe' => 'maternity']);
        ArticleUniverse::create(['id_article' => 2, 'universe' => 'maternity']);
        ArticleUniverse::create(['id_article' => 2, 'universe' => 'design']);
    }
}
