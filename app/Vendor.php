<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    public function block_no() {

      return $this->belongsTo('App\block_no');

    }

    public function vendor_type() {

      return $this->belongsTo('App\vendor_type');

    }

    public function order() {

      return $this->hasMany('App\order');

    }

    public function food_item() {

      return $this->hasMany('App\food_item');

    }

    // public function v_wallet() {
    //
    //   return $this->hasOne('App\v_wallet');
    //
    // }

    public function transaction() {

      return $this->hasMany('App\transaction');

    }

    //Mass assignable attributes
    protected $fillable = [
        'name', 'email', 'password',
    ];

    //hidden attributes
     protected $hidden = [
         'password', 'remember_token',
     ];

}
