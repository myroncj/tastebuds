<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class food_item extends Model
{
    public function vendor() {

      return $this->belongsTo('App\Vendor');

    }

    public function order() {

      return $this->belongsTo('App\order');

    }

    public function food_type() {

      return $this->belongsTo('App\food_type');

    }

    public function food_category() {

      return $this->belongsTo('App\food_category');

    }

    public function order_item() {

      return $this->hasMany('App\order_item','food_item_id');

    }
}
