<?php

use App\Models\BrandAgentCountry;
use Illuminate\Database\Seeder;

class BrandAgentCountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BrandAgentCountry::create(['id_agent' => 1, 'id_country' => 1]);
        BrandAgentCountry::create(['id_agent' => 1, 'id_country' => 234]);
        BrandAgentCountry::create(['id_agent' => 2, 'id_country' => 234]);
        BrandAgentCountry::create(['id_agent' => 3, 'id_country' => 234]);
    }
}
