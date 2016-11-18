<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Fields;
use App\Database;


class Table extends Model
{
    // protected $table = '__tables';
    protected $guarded = [];

    public function fields()
    {
      return $this->hasMany(Field::class);
    }

    public function database()
    {
      return $this->belongsTo(Database::class);
    }
    //
    // public function project()
    // {
    //   return $this->belongsTo(Database::class);
    // }
}
