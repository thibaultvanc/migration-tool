<?php

use App\Models\BrandSize;
use Illuminate\Database\Seeder;

class BrandSizeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BrandSize::create(['id_size_group' => 1, 'name' => '12']);
        BrandSize::create(['id_size_group' => 1, 'name' => '13']);
        BrandSize::create(['id_size_group' => 1, 'name' => '14']);
        BrandSize::create(['id_size_group' => 1, 'name' => '15']);
        BrandSize::create(['id_size_group' => 1, 'name' => '16']);
        BrandSize::create(['id_size_group' => 1, 'name' => '17']);
        BrandSize::create(['id_size_group' => 1, 'name' => '18']);
        BrandSize::create(['id_size_group' => 1, 'name' => '19']);
        BrandSize::create(['id_size_group' => 1, 'name' => '20']);
        BrandSize::create(['id_size_group' => 1, 'name' => '21']);
        BrandSize::create(['id_size_group' => 1, 'name' => '22']);
        BrandSize::create(['id_size_group' => 1, 'name' => '23']);

        BrandSize::create(['id_size_group' => 2, 'name' => '24']);
        BrandSize::create(['id_size_group' => 2, 'name' => '25']);
        BrandSize::create(['id_size_group' => 2, 'name' => '26']);
        BrandSize::create(['id_size_group' => 2, 'name' => '27']);
        BrandSize::create(['id_size_group' => 2, 'name' => '28']);
        BrandSize::create(['id_size_group' => 2, 'name' => '29']);
    }
}
