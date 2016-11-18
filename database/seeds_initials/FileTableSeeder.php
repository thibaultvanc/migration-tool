<?php

use App\Models\File;
use Illuminate\Database\Seeder;

class FileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //images de profil


        //brands

        // $brandList = DB::connection('playologie')->select('select * from brands where profile_picture is not null');
        //
        // // dd('$brandList',$brandList );
        // foreach ($brandList as $brand) {
        //   if (!$brand->profile_picture || $brand->profile_picture=='NULL') {
        //     continue;
        //   }
        //   echo $brand->name.'//';
        //
        //
        //   if ($brand->profile_picture) {
        //     $dir = 'brand';
        //     $fileName = $brand->profile_picture;
        //
        //     $mime = 'image/jpeg';
        //   }
        //
        //   \DB::table('file')->insert(['dir' => $dir, 'filename' => $fileName, 'mime' => $mime]);
        //
        // }
        //
        //





        //products

        $productList = DB::connection('playologie')->select('select * from products_images where file_url is not null limit 10');

        // dd('$productList',$productList );
        foreach ($productList as $product) {
          if (!$product->file_url || $product->file_url=='NULL') {
            continue;
          }
          echo $product->id_product.'//';


          if ($product->file_url) {
            $dir = 'product';
            $fileName = $product->file_url;
            $mime = 'image/jpeg';
          }

          \DB::table('file')->insert(['dir' => $dir, 'filename' => $fileName, 'mime' => $mime]);

        }








        // File::create(['dir' => 'brand', 'filename' => 'brand.jpg', 'mime' => 'image/jpeg']);
        // File::create(['dir' => 'article', 'filename' => '1.jpg', 'mime' => 'image/jpeg']);
        // File::create(['dir' => 'article', 'filename' => '2.jpg', 'mime' => 'image/jpeg']);
        // File::create(['dir' => 'product', 'filename' => 'product.jpg', 'mime' => 'image/jpeg']);
        // File::create(['dir' => 'print', 'filename' => 'print_1.jpg', 'mime' => 'image/jpeg']);
        // File::create(['dir' => 'print', 'filename' => 'print_2.jpg', 'mime' => 'image/jpeg']);
        // File::create(['dir' => 'print', 'filename' => 'print_3.jpg', 'mime' => 'image/jpeg']);
    }
}
