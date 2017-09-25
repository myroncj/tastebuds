<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\customer; //for importing the model
use App\c_wallet;
use App\budget_type;

class CustomerController extends Controller
{

    public function index() {

    $names = customer::all();

    return view('customer.login1',compact('names'));

    }

/*    public function index2($cust_id) {

    $name = customer::find($cust_id);

    return view('customer.login2',compact('name'));

    }
*/

    public function index2(customer $cust) {

    //$name = customer::find($cust_id);

    $name = $cust; //we can return or assignt the wildcard to the variable

    return view('customer.login2',compact('name'));

    }

    public function login() {

        return view('customer.cust_login');

    }


    public function register() {

        return view('customer.cust_register');

    }

    public function store() {

        //dd(request()->all());

        $cust = new customer;

        $cust->cust_name = request('name');
        $cust->cust_class = request('class');
        $cust->reg_no = request('regno');
        $cust->password = bcrypt(request('password'));
        //$cust->created_at = NOW();
        //$cust->updated_at = NOW();

        $cust->save();

        $match = customer::where('reg_no',request('regno'))->first();

        $pass = password_verify('$match->password','$cust->password');

        if(count($pass)==1) {

          session(['Cid' => $match->id,'Cname' => $match->cust_name]);

          session()->flash('message','Welcome to TasteBuds!!!');

        }

        return redirect('/Chome');
    }

    public function verify(request $request) {

        $this->validate($request,[
          'regno' => 'required',
          'password' => 'required'
        ]);

        $match = customer::where('reg_no',request('regno'))->first();

        $pass = password_verify('$match->password','$request->password');

        if(count($match)==1) {

          session(['Cid' => $match->id,'Cname' => $match->cust_name]);

          return redirect('/Chome');

        }

        return redirect('/Clogin');

    }

    public function homepage() {

        $id = session()->get('Cid');

        $name = session()->get('Cname');

        return view('customer.homepage',compact('id','name'));

    }

    public function menu() {

        return view('customer.menu');

    }

    public function wallet() {

      $id = session()->get('Cid');

      $name = session()->get('Cname');

      $btype = budget_type::all();

      return view('customer.cust_wallet',compact('id','name','btype'));

    }

    public function Clogout(request $request) {

      $request->session()->flush();

      return redirect('/Clogin');

    }

    public function Cexpire(request $request) {

      // $this->login();

      return view('customer.cust_login');

      // return redirect(\URL::previous());

    }

}
