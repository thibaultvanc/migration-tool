<?php

use App\Models\BrandPrint;
use Illuminate\Database\Seeder;

class BrandPrintTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BrandPrint::create(['id_dir' => 1, 'name' => 'Print 1', 'file' => 'print_1.jpg', 'status' => 1]);
        BrandPrint::create(['id_dir' => 1, 'name' => 'Print 2', 'file' => 'print_2.jpg', 'status' => 1]);
        BrandPrint::create(['id_dir' => 2, 'name' => 'Print 3', 'file' => 'print_3.jpg', 'status' => 1]);
    }
}
