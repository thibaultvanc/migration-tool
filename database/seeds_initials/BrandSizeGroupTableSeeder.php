<?php

use App\Models\BrandSizeGroup;
use Illuminate\Database\Seeder;

class BrandSizeGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BrandSizeGroup::create(['id_brand' => 1, 'universe' => 'kid', 'name' => 'Baby sizes']);
        BrandSizeGroup::create(['id_brand' => 1, 'universe' => 'kid', 'name' => 'Junior sizes']);
    }
}
