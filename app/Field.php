<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Table;

class Field extends Model
{
  // protected $table = '__fields';
  protected $guarded = [];


  

  public function fields()
  {
    return $this->belongsTo(Table::class);
  }
}
