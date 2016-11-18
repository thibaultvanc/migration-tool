<?php

use App\Models\BrandComposition;
use Illuminate\Database\Seeder;

class BrandCompositionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BrandComposition::create(['id_brand' => 1, 'name' => 'myCompo']);
    }
}
