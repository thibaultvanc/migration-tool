<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['email' => 't.admin@gmail.com', 'type' => 'admin', 'password' => bcrypt(1234)]);
        User::create(['email' => 't.brand@gmail.com', 'type' => 'brand', 'password' => bcrypt(1234), 'first_name' => 'Mickael', 'name' => 'Garcia']);
        User::create(['email' => 't.agent@gmail.com', 'type' => 'agent', 'password' => bcrypt(1234), 'first_name' => 'John', 'name' => 'Dow']);
        User::create(['email' => 't.agent2@gmail.com', 'type' => 'agent', 'password' => bcrypt(1234), 'first_name' => 'Marc', 'name' => 'Smith']);
        User::create(['email' => 't.agent3@gmail.com', 'type' => 'agent', 'password' => bcrypt(1234), 'first_name' => 'John', 'name' => 'Ferrel']);
        User::create(['email' => 't.distributor@gmail.com', 'type' => 'distributor', 'password' => bcrypt(1234), 'first_name' => 'Delphine', 'name' => 'Fray']);
        User::create(['email' => 't.distributor2@gmail.com', 'type' => 'distributor', 'password' => bcrypt(1234), 'first_name' => 'Jeanne', 'name' => 'Luck']);
        User::create(['email' => 't.distributor3@gmail.com', 'type' => 'distributor', 'password' => bcrypt(1234), 'first_name' => 'Eve', 'name' => 'Jones']);
        User::create(['email' => 't.buyer@gmail.com', 'id_phone' => 1, 'type' => 'buyer', 'password' => bcrypt(1234), 'first_name' => 'Carol', 'name' => 'Wilson', 'sex' => 'f', 'role' => 'General Manager']);
        User::create(['email' => 't.buyer2@gmail.com', 'id_phone' => 1, 'type' => 'buyer', 'password' => bcrypt(1234), 'first_name' => 'Jack', 'name' => 'White', 'sex' => 'm', 'role' => 'General Manager']);
    }
}
