<?php

use App\Models\Incoterm;
use Illuminate\Database\Seeder;

class IncotermTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Incoterm::create(['symbol' => 'EXW', 'key' => 'exw']);
        Incoterm::create(['symbol' => 'FCA', 'key' => 'fca']);
        Incoterm::create(['symbol' => 'CPT', 'key' => 'cpt']);
        Incoterm::create(['symbol' => 'CIP', 'key' => 'cip']);
        Incoterm::create(['symbol' => 'DAT', 'key' => 'dat']);
        Incoterm::create(['symbol' => 'DAP', 'key' => 'dap']);
        Incoterm::create(['symbol' => 'DDP', 'key' => 'ddp']);
        Incoterm::create(['symbol' => 'FAS', 'key' => 'fas']);
        Incoterm::create(['symbol' => 'FOB', 'key' => 'fob']);
        Incoterm::create(['symbol' => 'CFR', 'key' => 'cfr']);
        Incoterm::create(['symbol' => 'CIF', 'key' => 'cif']);
    }
}
