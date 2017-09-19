<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderItemController extends Controller
{
    public function order() {

      return $this->belongsTo('App\order');

    }
}
