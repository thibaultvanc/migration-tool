<?php

use App\Models\Phone;
use Illuminate\Database\Seeder;

class PhoneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Phone::create(['indicative' => '+33', 'number' => '638616548', 'is_mobile' => 1]);
        Phone::create(['indicative' => '+33', 'number' => '638616548', 'is_mobile' => 1]);
        Phone::create(['indicative' => '+33', 'number' => '638616548', 'is_mobile' => 1]);
    }
}
