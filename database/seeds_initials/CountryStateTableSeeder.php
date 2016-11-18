<?php

use Illuminate\Database\Seeder;

class CountryStateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sql = file_get_contents(dirname(__FILE__).'/sql/country_state.sql');
        DB::unprepared($sql);
    }
}
