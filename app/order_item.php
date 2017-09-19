<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order_item extends Model {

  public function order() {

    return $this->belongsToMany('App\order');

  }

  public function food_item() {

    return $this->belongsTo('App\food_item');

  }

}
