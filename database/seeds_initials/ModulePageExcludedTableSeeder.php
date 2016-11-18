<?php

use App\Models\ModulePageExcluded;
use Illuminate\Database\Seeder;

class ModulePageExcludedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModulePageExcluded::create(['id_module' => 1, 'id_page' => 4]);
    }
}
