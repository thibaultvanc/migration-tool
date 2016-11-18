<?php

use App\Models\BrandCollectionDistributor;
use Illuminate\Database\Seeder;

class BrandCollectionDistributorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BrandCollectionDistributor::create(['id_collection' => 3, 'id_distributor' => 1]);
        BrandCollectionDistributor::create(['id_collection' => 3, 'id_distributor' => 2]);
    }
}
