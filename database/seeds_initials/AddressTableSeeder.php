<?php

use App\Models\Address;
use Illuminate\Database\Seeder;

class AddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        \DB::table('address')->insert(['id_country' => 1, 'id_state' => 1, 'address' => '2 Str', 'zip_code' => '2A', 'city' => 'NY']);


        $users = DB::connection('playologie')->select('select * from users');

        dd('__HERE__', $users);

        //connect to prod de playologie

        //get table address

        // $list = [];
        //
        //
        //
        // foreach ($list as $value) {
        //
        //
        //   Address::create(['id_country' => $value->country.'s', 'id_state' => $value, 'address' => '2 Str', 'zip_code' => '2A', 'city' => 'NY']);
        // }
        //


    }
}
