<?php

use App\Models\BrandAgent;
use Illuminate\Database\Seeder;

class BrandAgentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BrandAgent::create(['id_brand' => 1, 'id_user' => 3, 'default_commission' => 10]);
        BrandAgent::create(['id_brand' => 1, 'id_user' => 4, 'default_commission' => 10]);
        BrandAgent::create(['id_brand' => 1, 'id_user' => 5, 'default_commission' => 10]);
    }
}
