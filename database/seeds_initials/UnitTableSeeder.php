<?php

use App\Models\Unit;
use Illuminate\Database\Seeder;

class UnitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Unit::create(['label' => 'g']);
        Unit::create(['label' => 'kg']);
        Unit::create(['label' => 'oz']);
        Unit::create(['label' => 'lb']);
    }
}
