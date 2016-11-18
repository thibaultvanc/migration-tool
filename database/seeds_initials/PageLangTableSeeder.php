<?php

use App\Models\PageLang;
use Illuminate\Database\Seeder;

class PageLangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PageLang ::create(['id_page' => 1, 'id_lang' => 1, 'name' => 'Accueil', 'description' => "Ma page d'accueil"]);
        PageLang ::create(['id_page' => 2, 'id_lang' => 1, 'name' => '404 Error', 'description' => "Page introuvable"]);
        PageLang ::create(['id_page' => 3, 'id_lang' => 1, 'name' => 'Nous contacter', 'description' => "Page nous contacter"]);
        PageLang ::create(['id_page' => 4, 'id_lang' => 1, 'name' => 'Administration - Login']);
        PageLang ::create(['id_page' => 5, 'id_lang' => 1, 'name' => 'Administration - Dashboard']);
        PageLang ::create(['id_page' => 6, 'id_lang' => 1, 'name' => 'Administration - Menu']);
        PageLang ::create(['id_page' => 7, 'id_lang' => 1, 'name' => 'Administration - Page']);
        PageLang ::create(['id_page' => 8, 'id_lang' => 1, 'name' => 'Administration - Modules']);
        PageLang ::create(['id_page' => 9, 'id_lang' => 1, 'name' => 'Marque - Tableau de bord']);
        PageLang ::create(['id_page' => 10, 'id_lang' => 1, 'name' => 'Marque - Collections']);
        PageLang ::create(['id_page' => 11, 'id_lang' => 1, 'name' => 'Article']);
        PageLang ::create(['id_page' => 12, 'id_lang' => 1, 'name' => 'Marque - Collection configuration']);
        PageLang ::create(['id_page' => 13, 'id_lang' => 1, 'name' => 'Marque - Commande']);
        PageLang ::create(['id_page' => 14, 'id_lang' => 1, 'name' => 'Marque - Produit']);
        PageLang ::create(['id_page' => 16, 'id_lang' => 1, 'name' => 'Marque - Client']);
    }
}
