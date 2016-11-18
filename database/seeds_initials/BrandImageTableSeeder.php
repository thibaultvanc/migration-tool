<?php

use App\Models\BrandImage;
use Illuminate\Database\Seeder;

class BrandImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BrandImage::create(['id_brand' => 1, 'universe' => 'kid', 'file' => 'brand.jpg']);
        BrandImage::create(['id_brand' => 1, 'universe' => 'maternity', 'file' => 'brand.jpg']);
        BrandImage::create(['id_brand' => 1, 'universe' => 'design', 'file' => 'brand.jpg']);
        BrandImage::create(['id_brand' => 1, 'universe' => 'adult', 'file' => 'brand.jpg']);
    }
}
