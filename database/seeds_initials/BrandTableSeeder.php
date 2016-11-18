<?php

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::create(['id_address' => 1, 'name' => 'MyBrand', 'agent_commission_default' => 10.5]);
    }
}
