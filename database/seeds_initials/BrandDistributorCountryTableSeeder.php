<?php

use App\Models\BrandDistributorCountry;
use Illuminate\Database\Seeder;

class BrandDistributorCountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BrandDistributorCountry::create(['id_distributor' => 1, 'id_country' => 234]);
        BrandDistributorCountry::create(['id_distributor' => 2, 'id_country' => 234]);
        BrandDistributorCountry::create(['id_distributor' => 3, 'id_country' => 234]);
    }
}
