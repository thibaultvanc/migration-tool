<?php

use Illuminate\Database\Seeder;

class ProductMaterialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sql = file_get_contents(dirname(__FILE__).'/sql/product_material.sql');
        DB::unprepared($sql);
    }
}
