<?php

use App\Models\MenuItemLang;
use Illuminate\Database\Seeder;

class MenuItemLangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MenuItemLang::create(['id_item' => 1, 'id_lang' => 1, 'name' => 'Accueil']);
        MenuItemLang::create(['id_item' => 2, 'id_lang' => 1, 'name' => 'Nous contacter']);
        MenuItemLang::create(['id_item' => 3, 'id_lang' => 1, 'name' => 'Tableau de bord']);
        MenuItemLang::create(['id_item' => 4, 'id_lang' => 1, 'name' => 'Menus']);
        MenuItemLang::create(['id_item' => 5, 'id_lang' => 1, 'name' => 'Pages']);
        MenuItemLang::create(['id_item' => 6, 'id_lang' => 1, 'name' => 'Modules']);
    }
}
