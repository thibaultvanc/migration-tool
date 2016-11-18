<?php

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::create(['alias' => '/', 'access' => 'public']);
        Page::create(['alias' => '404', 'access' => 'public']);
        Page::create(['alias' => 'contact', 'access' => 'public']);
        Page::create(['alias' => 'admin', 'access' => 'public', 'css_class' => 'com_admin_login']);
        Page::create(['alias' => 'admin-dash', 'access' => 'admin']);
        Page::create(['alias' => 'admin-menu', 'access' => 'admin']);
        Page::create(['alias' => 'admin-page', 'access' => 'admin']);
        Page::create(['alias' => 'admin-module', 'access' => 'admin']);
        Page::create(['alias' => 'brand-dash', 'access' => 'brand']);
        Page::create(['alias' => 'brand-collection', 'access' => 'brand']);
        Page::create(['alias' => 'article', 'access' => 'public']);
        Page::create(['alias' => 'brand-collection-param', 'access' => 'brand', 'css_class' => 'param_page']);
        Page::create(['alias' => 'brand-order', 'access' => 'brand']);
        Page::create(['alias' => 'brand-collection-product', 'access' => 'brand', 'css_class' => 'param_page']);
        Page::create(['alias' => 'brand-collection-stock', 'access' => 'brand']);
        Page::create(['alias' => 'brand-customer', 'access' => 'brand']);
    }
}
