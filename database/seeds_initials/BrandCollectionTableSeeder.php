<?php

use App\Models\BrandCollection;
use Illuminate\Database\Seeder;

class BrandCollectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BrandCollection::create(['id_brand' => 1, 'universe' => 'kid', 'type' => 'new', 'name' => 'newKidCollection', 'ordering_date_end' => '2016-11-19 13:53:38', 'delivery_date_start' => '2016-12-19 13:53:38', 'delivery_date_end' => '2016-12-31 13:53:38']);
        BrandCollection::create(['id_brand' => 1, 'universe' => 'kid', 'type' => 'immediate', 'name' => 'immadiateKidCollection']);
        BrandCollection::create(['id_brand' => 1, 'universe' => 'adult', 'type' => 'new', 'name' => 'newKidCollection2']);
    }
}
