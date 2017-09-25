<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Vendor;
use App\food_item;

class FoodItemController extends Controller
{

  public function food_add(request $request) {

      //dd(request()->all());

      $this->validate($request,[
        'name' => 'required',
        'cat' => 'required',
        'type'=> 'required',
        'quantity'=>'required',
        'availability' => 'required',
        'price' => 'required'

      ]);

      $fa = new food_item;

      $fa->vendor_id = session()->get('Vid');

      $fa->name = request('name');
      $fa->food_category_id = request('cat');
      $fa->food_type_id = request('type');
      $fa->quantity = request('quantity');
      $fa->availability = request('availability');
      $fa->price = request('price');
      //$cust->created_at = NOW();
      //$cust->updated_at = NOW();

      $fa->save();

      return redirect('/Vdash');
  }

}
