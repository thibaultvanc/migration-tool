<?php

use App\Models\Module;
use Illuminate\Database\Seeder;

class ModuleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Module::create(['name' => 'Menu public', 'module' => 'Menu', 'param' => '{"id_menu":1,"css_class":""}', 'hook' => 'header.top']);
        Module::create(['name' => 'AdminLogin', 'module' => 'AdminLogin', 'hook' => 'content.main.content']);
        Module::create(['name' => 'AdminDash', 'module' => 'AdminDash', 'hook' => 'content.main.content']);
        Module::create(['name' => 'AdminMenu', 'module' => 'AdminMenu', 'hook' => 'content.main.content']);
        Module::create(['name' => 'Menu administration', 'module' => 'Menu', 'hook' => 'content.left', 'param' => '{"id_menu":2,"css_class":""}']);
        Module::create(['name' => 'AdminHeader', 'module' => 'AdminHeader', 'hook' => 'header.top']);
        Module::create(['name' => 'Admin logo', 'module' => 'Html', 'hook' => 'content.left', 'num_order' => 1, 'param' => '{"fr":{"content":"<div class=\"logo\"><figure><img src=\"public/media/logo/default.png\"></figure></div>"}}']);
        Module::create(['name' => 'AdminPage', 'module' => 'AdminPage', 'hook' => 'content.main.content']);
        Module::create(['name' => 'AdminModule', 'module' => 'AdminModule', 'hook' => 'content.main.content']);
        Module::create(['name' => 'Login', 'module' => 'Login', 'hook' => 'content.main.content']);
        Module::create(['name' => 'BrandDash', 'module' => 'BrandDash', 'hook' => 'content.main.content']);
        Module::create(['name' => 'BrandCollection', 'module' => 'BrandCollection', 'hook' => 'content.main.content']);
        Module::create(['name' => 'Header', 'module' => 'Header', 'hook' => 'header.top']);
        Module::create(['name' => 'Article', 'module' => 'Article', 'hook' => 'content.main.content']);
        Module::create(['name' => 'BrandCollectionParam', 'module' => 'BrandCollectionParam', 'hook' => 'content.main.content']);
        Module::create(['name' => 'BrandOrder', 'module' => 'BrandOrder', 'hook' => 'content.main.content']);
        Module::create(['name' => 'BrandCollectionProduct', 'module' => 'BrandCollectionProduct', 'hook' => 'content.main.content']);
        Module::create(['name' => 'BrandCollectionStock', 'module' => 'BrandCollectionStock', 'hook' => 'content.main.content']);
        Module::create(['name' => 'BrandCustomer', 'module' => 'BrandCustomer', 'hook' => 'content.main.content']);
    }
}
