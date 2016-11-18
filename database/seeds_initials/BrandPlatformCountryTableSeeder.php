<?php

use App\Models\BrandPlatformCountry;
use Illuminate\Database\Seeder;

class BrandPlatformCountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BrandPlatformCountry::create(['id_platform' => 1, 'id_country' => 234]);
    }
}
