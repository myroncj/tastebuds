<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Vendor;

use App\vendor_type;

use App\order;

use App\block_no;

use App\food_category;

use App\food_type;

class VendorController extends Controller
{
    //

    public function register() {

        $vendor_type = vendor_type::all();

        $block = block_no::all();

        return view('vendor.vend_register',compact('vendor_type','block'));

    }

    public function store() {

        $vend = new Vendor;

        $vend->name = request('name');
        $vend->vendor_type_id = request('type');
        $vend->stall_no = request('stall_no');
        $vend->block_no_id = request('block_no');
        $vend->phone = request('phone');
        $vend->username = request('username');
        $vend->password = request('password');

        $vend->save();

        $match = Vendor::where('username',request('username'))->where('password',request('password'))->first();

        if(count($match)==1) {

            session(['Vid' => $match->id,'Vname' => $match->name]);

            session()->flash('message','Welcome to TasteBuds!!!');

        }

        return redirect('/Vdash');

    }

    public function login() {

        return view('vendor.vend_login');

    }

    public function verify(request $request) {

        $this->validate($request,[
          'username' => 'required',
          'password' => 'required'
        ]);

        $match = Vendor::where('username',request('username'))->where('password',request('password'))->first();

        if(count($match)==1) {

            session(['Vid' => $match->id,'Vname' => $match->name]);

            return redirect('/Vdash');

        }

        return redirect('/Vlogin');

    }

    public function dashboard() {


        $id = session()->get('Vid');
        $name = session()->get('Vname');
        $orders = order::where('vendor_id','=',$id)->get();


        return view('vendor.vend_dashboard',compact('orders','id','name'));

        //return view('vendor.vend_dashboard');

    }

    public function food() {

      $id = session()->get('Vid');

      $name = session()->get('Vname');

      $food_cat = food_category::all();

      $food_type = food_type::all();

      return view('vendor.add_food_item',compact('food_cat','food_type','id','name'));

    }

    public function logout(request $request) {

      $request->session()->flush();

      return redirect('/Vlogin');

    }


}
