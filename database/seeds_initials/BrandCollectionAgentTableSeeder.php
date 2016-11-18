<?php

use App\Models\BrandCollectionAgent;
use Illuminate\Database\Seeder;

class BrandCollectionAgentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BrandCollectionAgent::create(['id_collection' => 3, 'id_agent' => 1, 'commission' => 2.5]);
        BrandCollectionAgent::create(['id_collection' => 3, 'id_agent' => 2, 'commission' => 2.5]);
    }
}
