const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
|--------------------------------------------------------------------------
| Elixir Asset Management
|--------------------------------------------------------------------------
|
| Elixir provides a clean, fluent API for defining some basic Gulp tasks
| for your Laravel application. By default, we are compiling the Sass
| file for your application as well as publishing vendor resources.
|
*/

elixir((mix) => {
  mix.sass('app.scss')
  .webpack('app.js');

  mix.copy('../../../node_modules/font-awesome/fonts', '/public/fonts');   //not

  mix.scripts([
    // '../../../node_modules/keen-ui/dist/keen-ui.js'
    '../../../node_modules/material-design-lite/material.min.js'
  ], 'public/js/vendor.js');

});
