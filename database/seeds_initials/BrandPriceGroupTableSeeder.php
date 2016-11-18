<?php

use App\Models\BrandPriceGroup;
use Illuminate\Database\Seeder;

class BrandPriceGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BrandPriceGroup::create(['id_size_group' => 1, 'name' => '12-18']);
        BrandPriceGroup::create(['id_size_group' => 1, 'name' => '19-23']);
    }
}
