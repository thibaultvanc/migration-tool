<?php

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::create(['id_category' => 1, 'type' => 'playologie', 'title' => 'Let me keep This memory', 'alias' => 'let-keep-memory', 'file' => '1.jpg', 'status' => 1, 'description' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum auctor, est sed dictum vehicula, ex nulla feugiat diam, sit amet hendrerit nibh lorem et est. Ut diam eros, ornare in luctus eget, lacinia nec leo. Proin ornare erat eget elementum scelerisque. Nulla vestibulum ligula et erat aliquam facilisis eu in elit. Sed ac magna vel lorem venenatis molestie. Ut ac placerat turpis, vitae placerat tortor. Donec nibh nulla, pulvinar quis elementum vitae, elementum gravida ipsum. Donec lacus turpis, interdum sed viverra fermentum, imperdiet et turpis. In tristique mauris eu lobortis tincidunt. Fusce pharetra, mi vitae malesuada lobortis, diam elit fringilla nulla, vel luctus dolor nisl et lacus. Nullam ultrices mattis tortor et tristique.<br>Etiam enim lorem, elementum sit amet risus id, hendrerit mattis tellus. Etiam viverra, nisi a ullamcorper convallis, lacus nulla bibendum nibh, sed efficitur massa neque nec ipsum. Donec a suscipit velit. Phasellus sit amet sem aliquet sem sodales auctor. Fusce in blandit nunc, in bibendum tellus. Vivamus ullamcorper non risus quis accumsan. Etiam ultricies, magna at elementum placerat, magna dui pulvinar purus, dignissim tristique sapien orci sed tellus. Nunc sollicitudin tellus condimentum est pellentesque, nec interdum ipsum efficitur. Praesent tincidunt metus lacus, ut hendrerit ipsum aliquet sit amet. Nam feugiat est ut justo dapibus luctus. Aenean fringilla est vitae est iaculis, non volutpat tortor pellentesque. Fusce lobortis dolor justo, ac tempus lectus tempor vitae.</p>"]);
        Article::create(['id_category' => 1, 'type' => 'playologie', 'title' => 'Let me keep This memory', 'alias' => 'let-keep-memory2', 'file' => '2.jpg', 'status' => 1,  'description' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum auctor, est sed dictum vehicula, ex nulla feugiat diam, sit amet hendrerit nibh lorem et est. Ut diam eros, ornare in luctus eget, lacinia nec leo. Proin ornare erat eget elementum scelerisque. Nulla vestibulum ligula et erat aliquam facilisis eu in elit. Sed ac magna vel lorem venenatis molestie. Ut ac placerat turpis, vitae placerat tortor. Donec nibh nulla, pulvinar quis elementum vitae, elementum gravida ipsum. Donec lacus turpis, interdum sed viverra fermentum, imperdiet et turpis. In tristique mauris eu lobortis tincidunt. Fusce pharetra, mi vitae malesuada lobortis, diam elit fringilla nulla, vel luctus dolor nisl et lacus. Nullam ultrices mattis tortor et tristique.<br>Etiam enim lorem, elementum sit amet risus id, hendrerit mattis tellus. Etiam viverra, nisi a ullamcorper convallis, lacus nulla bibendum nibh, sed efficitur massa neque nec ipsum. Donec a suscipit velit. Phasellus sit amet sem aliquet sem sodales auctor. Fusce in blandit nunc, in bibendum tellus. Vivamus ullamcorper non risus quis accumsan. Etiam ultricies, magna at elementum placerat, magna dui pulvinar purus, dignissim tristique sapien orci sed tellus. Nunc sollicitudin tellus condimentum est pellentesque, nec interdum ipsum efficitur. Praesent tincidunt metus lacus, ut hendrerit ipsum aliquet sit amet. Nam feugiat est ut justo dapibus luctus. Aenean fringilla est vitae est iaculis, non volutpat tortor pellentesque. Fusce lobortis dolor justo, ac tempus lectus tempor vitae.</p>"]);

    }
}
