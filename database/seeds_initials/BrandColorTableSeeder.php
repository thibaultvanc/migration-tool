<?php

use App\Models\BrandColor;
use Illuminate\Database\Seeder;

class BrandColorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BrandColor::create(['id_dir' => 1, 'name' => 'Color 1', 'hex_color' => '00000', 'cmyk_color' => '0,0,0,0']);
        BrandColor::create(['id_dir' => 1, 'name' => 'Color 2', 'hex_color' => '00000', 'cmyk_color' => '0,0,0,0']);
        BrandColor::create(['id_dir' => 2, 'name' => 'Color 3', 'hex_color' => '00000', 'cmyk_color' => '0,0,0,0']);
    }
}
