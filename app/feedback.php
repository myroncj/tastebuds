<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class feedback extends Model
{
    public function customer() {

      return $this->hasOne('App\customer');

    }
}
