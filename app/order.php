<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    public function customer() {

      return $this->belongsTo('App\customer');

    }

    public function vendor() {

      return $this->belongsTo('App\Vendor');

    }

    public function order_item() {

      return $this->hasMany('App\order_item','order_id');

    }

    public function transaction() {

      return $this->hasOne('App\transaction');

    }

    public function status() {

      return $this->hasOne('App\status');

    }


}
