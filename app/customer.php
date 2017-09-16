<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    //
    //protected $primaryKey='cust_id';
    protected $table = 'customer';

    public function scopeRegisterNo($query) {

        return $query->where('reg_no',1647215);

    }

    public function orders() {

      return $this->hasMany('App\order');

    }

    public function transaction() {

      return $this->hasMany('App\Transaction');

    }

    public function c_wallet() {

      return $this->hasOne('App\c_wallet');

    }

}
