<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function author(){
  return $this ->blongsTo("App\Models\Author");
    }
    public function editorial(){
     return $this->belongTo("App\Models\Editorial");
    }
}
