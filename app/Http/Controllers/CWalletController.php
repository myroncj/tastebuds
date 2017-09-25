<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\c_wallet;
use App\budget_type;

class CWalletController extends Controller
{

  public function wallet_add(request $request) {

      //dd(request()->all());

      $wall = new c_wallet;

      $wall->customer_id = session()->get('Cid');
      $wall->balance = request('bal');
      $wall->budget_type = request('type');
      $wall->budget = request('bud');
      //$cust->created_at = NOW();
      //$cust->updated_at = NOW();

      $wall->save();

      return redirect('/Chome');
  }

}
