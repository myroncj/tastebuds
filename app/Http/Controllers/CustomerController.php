<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\customer; //for importing the model

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
    
    public function logger() {
        
                
        $match = customer::where('reg_no',request('regno'))->first();
        
        //@if()
        
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
        $cust->password = request('password');
        //$cust->created_at = NOW();
        //$cust->updated_at = NOW();
        
        $cust->save();
        
        return redirect('/Clogin');
    }
    
    public function verify() {
        
        $match = customer::where('reg_no',request('regno'))->where('password',request('password'))->first();

        if(count($match)==1) {

            return redirect('/Chome');

        }
        
        return redirect('/Clogin');
    
    }
    
    public function homepage() {
        
        return view('customer.homepage');
        
    }
    
    public function menu() {
        
        return view('customer.menu');
        
    }
    
}
