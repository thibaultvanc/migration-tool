<?php

namespace Organit;

// use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Migration
{

  public function __construct()
  {
    echo Carbon::now();
    ini_set('max_execution_time', 300); //300 seconds = 5 minutes

    $tasks = [
      \Organit\Brands\Brands::class,
      \Organit\Buyers\Buyers::class,
      \Organit\Agents\Agents::class,
      \Organit\Distributors\Distributors::class,
      \Organit\Collections\Collections::class,
      \Organit\Products\Products::class,
      \Organit\Universe\Universe::class,
      \Organit\Orders\Orders::class,
      \Organit\Users\Users::class,
    ];


    foreach ($tasks as $task) {
      echo '<hr>';
      // dd(' explode('\\', $task)', explode('\\', $task) );

      echo '<pre>';
      echo explode('\\', $task)[2];
      echo '</pre>';
      (new $task($this))->handle();
    }
    echo '<hr>';


    dd('__Done__');


  }


}
