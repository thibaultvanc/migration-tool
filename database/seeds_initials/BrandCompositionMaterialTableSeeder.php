<?php

use App\Models\BrandCompositionMaterial;
use Illuminate\Database\Seeder;

class BrandCompositionMaterialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BrandCompositionMaterial::create(['id_composition' => 1, 'id_material' => 20, 'rate' => 20.5]);
        BrandCompositionMaterial::create(['id_composition' => 1, 'id_material' => 25, 'rate' => 10]);
        BrandCompositionMaterial::create(['id_composition' => 1, 'id_material' => 2, 'rate' => 5]);
        BrandCompositionMaterial::create(['id_composition' => 1, 'id_material' => 35, 'rate' => 5]);
    }
}
