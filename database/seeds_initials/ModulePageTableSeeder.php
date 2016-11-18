<?php

use App\Models\ModulePage;
use Illuminate\Database\Seeder;

class ModulePageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModulePage::create(['id_module' => 1, 'access' => 'public']);
        ModulePage::create(['id_module' => 1, 'access' => 'user']);
        ModulePage::create(['id_module' => 7, 'access' => 'admin']);
        ModulePage::create(['id_module' => 5, 'access' => 'admin']);
        ModulePage::create(['id_module' => 6, 'access' => 'admin']);
        ModulePage::create(['id_module' => 13, 'access' => 'brand']);

        ModulePage::create(['id_module' => 2, 'id_page' => 4]);
        ModulePage::create(['id_module' => 3, 'id_page' => 5]);
        ModulePage::create(['id_module' => 4, 'id_page' => 6]);
        ModulePage::create(['id_module' => 8, 'id_page' => 7]);
        ModulePage::create(['id_module' => 9, 'id_page' => 8]);
        ModulePage::create(['id_module' => 10, 'id_page' => 1]);
        ModulePage::create(['id_module' => 11, 'id_page' => 9]);
        ModulePage::create(['id_module' => 12, 'id_page' => 10]);
        ModulePage::create(['id_module' => 14, 'id_page' => 11]);
        ModulePage::create(['id_module' => 15, 'id_page' => 12]);
        ModulePage::create(['id_module' => 16, 'id_page' => 13]);
        ModulePage::create(['id_module' => 17, 'id_page' => 14]);
        ModulePage::create(['id_module' => 18, 'id_page' => 15]);
        ModulePage::create(['id_module' => 19, 'id_page' => 16]);
    }
}
