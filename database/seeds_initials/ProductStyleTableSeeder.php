<?php

use App\Models\ProductStyle;
use Illuminate\Database\Seeder;

class ProductStyleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductStyle::create(['universe' => 'adult', 'key' => 'street']);
        ProductStyle::create(['universe' => 'adult', 'key' => 'sport']);
        ProductStyle::create(['universe' => 'adult', 'key' => 'classic']);
        ProductStyle::create(['universe' => 'adult', 'key' => 'casual']);
        ProductStyle::create(['universe' => 'adult', 'key' => 'smart']);
        ProductStyle::create(['universe' => 'adult', 'key' => 'homewear']);
        ProductStyle::create(['universe' => 'adult', 'key' => 'beach']);

        ProductStyle::create(['universe' => 'design', 'key' => 'modern']);
        ProductStyle::create(['universe' => 'design', 'key' => 'classic']);
        ProductStyle::create(['universe' => 'design', 'key' => 'industrial']);
        ProductStyle::create(['universe' => 'design', 'key' => 'natural']);
        ProductStyle::create(['universe' => 'design', 'key' => 'ethnic']);

        ProductStyle::create(['universe' => 'kid', 'key' => 'street']);
        ProductStyle::create(['universe' => 'kid', 'key' => 'sport']);
        ProductStyle::create(['universe' => 'kid', 'key' => 'classic']);
        ProductStyle::create(['universe' => 'kid', 'key' => 'casual']);
        ProductStyle::create(['universe' => 'kid', 'key' => 'smart']);
        ProductStyle::create(['universe' => 'kid', 'key' => 'beach']);

        ProductStyle::create(['universe' => 'maternity', 'key' => 'smart']);
        ProductStyle::create(['universe' => 'maternity', 'key' => 'ceremony']);
        ProductStyle::create(['universe' => 'maternity', 'key' => 'classic']);
        ProductStyle::create(['universe' => 'maternity', 'key' => 'casual']);
        ProductStyle::create(['universe' => 'maternity', 'key' => 'street']);
        ProductStyle::create(['universe' => 'maternity', 'key' => 'sport']);
        ProductStyle::create(['universe' => 'maternity', 'key' => 'homewear']);
        ProductStyle::create(['universe' => 'maternity', 'key' => 'beach']);

    }
}
