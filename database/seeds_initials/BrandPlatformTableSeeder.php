<?php

use App\Models\BrandPlatform;
use Illuminate\Database\Seeder;

class BrandPlatformTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BrandPlatform::create(['id_brand' => 1, 'name' => 'myPlatform']);
    }
}
