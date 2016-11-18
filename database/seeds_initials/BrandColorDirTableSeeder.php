<?php

use App\Models\BrandColorDir;
use Illuminate\Database\Seeder;

class BrandColorDirTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BrandColorDir::create(['id_brand' => 1, 'name' => 'Collection 1']);
        BrandColorDir::create(['id_brand' => 1, 'name' => 'Collection 2']);
    }
}
