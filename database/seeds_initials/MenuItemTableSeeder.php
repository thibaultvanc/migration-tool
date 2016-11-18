<?php

use App\Models\MenuItem;
use Illuminate\Database\Seeder;

class MenuItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MenuItem::create(['id_menu' => 1, 'id_page' => 1, 'type' => 'page', 'num_order' => 0]);
        MenuItem::create(['id_menu' => 1, 'id_page' => 3, 'type' => 'page', 'num_order' => 1]);

        MenuItem::create(['id_menu' => 2, 'id_page' => 5, 'type' => 'page', 'num_order' => 0]);
        MenuItem::create(['id_menu' => 2, 'id_page' => 6, 'type' => 'page', 'num_order' => 1]);
        MenuItem::create(['id_menu' => 2, 'id_page' => 7, 'type' => 'page', 'num_order' => 2]);
        MenuItem::create(['id_menu' => 2, 'id_page' => 8, 'type' => 'page', 'num_order' => 3]);
    }
}
