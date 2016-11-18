<?php

use App\Models\Lang;
use Illuminate\Database\Seeder;

class LangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


      // Note : code_moment ru  //



      $users = DB::connection('playologie')->select('select * from users');

      // dd('__HERE__', $users);
        \DB::table('lang')->insert(['code' => 'en', 'code_moment' => 'en-gb', 'css_ico' => 'english', 'name' => 'Anglais', 'date_format' => 'm/d/Y', 'date_format_angular' => 'MM/dd/yyyy', 'date_format_moment' => 'MM/DD/YYYY', 'currency_position' => 'before']);
        \DB::table('lang')->insert(['code' => 'fr', 'code_moment' => 'fr', 'css_ico' => 'french', 'name' => 'Français', 'date_format' => 'd/m/Y', 'date_format_angular' => 'dd/MM/yyyy', 'date_format_moment' => 'DD/MM/YYYY', 'currency_position' => 'after']);
        \DB::table('lang')->insert(['code' => 'de', 'code_moment' => 'de', 'css_ico' => 'germany', 'name' => 'Deutch', 'date_format' => 'm/d/Y', 'date_format_angular' => 'MM/dd/yyyy', 'date_format_moment' => 'MM/DD/YYYY', 'currency_position' => 'after']);
        \DB::table('lang')->insert(['code' => 'es', 'code_moment' => 'es', 'css_ico' => 'spanish', 'name' => 'Spanish', 'date_format' => 'm/d/Y', 'date_format_angular' => 'MM/dd/yyyy', 'date_format_moment' => 'MM/DD/YYYY', 'currency_position' => 'after']);
        \DB::table('lang')->insert(['code' => 'jp', 'code_moment' => 'jp', 'css_ico' => 'japanese', 'name' => 'Japanese', 'date_format' => 'm/d/Y', 'date_format_angular' => 'MM/dd/yyyy', 'date_format_moment' => 'MM/DD/YYYY', 'currency_position' => 'after']);
        \DB::table('lang')->insert(['code' => 'ru', 'code_moment' => 'ru', 'css_ico' => 'russia', 'name' => 'Russia', 'date_format' => 'm/d/Y', 'date_format_angular' => 'MM/dd/yyyy', 'date_format_moment' => 'MM/DD/YYYY', 'currency_position' => 'after']);
        \DB::table('lang')->insert(['code' => 'it', 'code_moment' => 'ru', 'css_ico' => 'italia', 'name' => 'Italia', 'date_format' => 'm/d/Y', 'date_format_angular' => 'MM/dd/yyyy', 'date_format_moment' => 'MM/DD/YYYY', 'currency_position' => 'after']);
        \DB::table('lang')->insert(['code' => 'ka', 'code_moment' => 'ru', 'css_ico' => 'korea', 'name' => 'Korea', 'date_format' => 'm/d/Y', 'date_format_angular' => 'MM/dd/yyyy', 'date_format_moment' => 'MM/DD/YYYY', 'currency_position' => 'after']);
    }
}
