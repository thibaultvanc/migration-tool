<?php

use App\Models\BrandDistributor;
use Illuminate\Database\Seeder;

class BrandDistributorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BrandDistributor::create(['id_brand' => 1, 'id_user' => 6, 'name' => 'Distributor 1']);
        BrandDistributor::create(['id_brand' => 1, 'id_user' => 7, 'name' => 'Distributor 2']);
        BrandDistributor::create(['id_brand' => 1, 'id_user' => 8, 'name' => 'Distributor 3']);
    }
}
