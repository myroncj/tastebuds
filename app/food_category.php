<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class food_category extends Model
{
    public function food_item() {

      return $this->hasOne('App\food_item');

    }
}
