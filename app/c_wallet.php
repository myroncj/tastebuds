<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class c_wallet extends Model
{
    //
    public function customer() {

      return $this->belongsTo('App\customer');

    }

    public function budget_type() {



    }

}
