<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Database;
class Project extends Model
{
  // protected $table = '__projects';
  protected $guarded = [];

  public function oldDatabase()
  {
    return $this->belongsTo(Database::class, 'old_database_id');
  }

  public function newDatabase()
  {
    return $this->belongsTo(Database::class, 'new_database_id');
  }
}
