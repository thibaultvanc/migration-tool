<?php

use App\Models\BrandPrintDir;
use Illuminate\Database\Seeder;

class BrandPrintDirTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BrandPrintDir::create(['id_brand' => 1, 'name' => 'Collection 1']);
        BrandPrintDir::create(['id_brand' => 1, 'name' => 'Collection 2']);
    }
}
