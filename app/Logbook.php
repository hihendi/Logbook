<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logbook extends Model
{
    
    public function Marketing()
    {
      return $this->belongsTo('App\Marketing');
    }
}
