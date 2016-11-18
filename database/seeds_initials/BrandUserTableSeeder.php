<?php

use App\Models\BrandUser;
use Illuminate\Database\Seeder;

class BrandUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BrandUser::create(['id_brand' => '1', 'id_user' => 2, 'is_sales_manager' => 1]);
    }
}
