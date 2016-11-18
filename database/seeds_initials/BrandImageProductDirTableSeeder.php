<?php

use App\Models\BrandImageProductDir;
use Illuminate\Database\Seeder;

class BrandImageProductDirTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BrandImageProductDir::create(['id_brand' => 1, 'name' => 'Product 1']);
        BrandImageProductDir::create(['id_brand' => 1, 'name' => 'Product 2']);
    }
}
