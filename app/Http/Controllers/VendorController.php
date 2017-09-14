<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Vendor;

use App\order;

class VendorController extends Controller
{
    //
    
    public function register() {
        
        return view('vendor.vend_register');
        
    }    
    
    public function store() {
        
        $vend = new Vendor;
        
        $vend->name = request('name');
        $vend->type = request('type');
        $vend->stall_no = request('stall_no');
        $vend->block_no = request('block_no');
        $vend->phone = request('phone');
        $vend->username = request('username');
        $vend->password = request('password');
        
        $vend->save();
        
        return redirect('/Vreg');
        
    }
    
    public function login() {
        
        return view('vendor.vend_login');
        
    }
    
    public function verify() {
        
        $match = vendor::where('username',request('username'))->where('password',request('password'))->first();

        if(count($match)==1) {

            return redirect('/Vdash');

        }
        
        return redirect('/Vlogin');
    
    }
    
    public function dashboard() {
        
        $orders = order::all();
        
            return view('vendor.vend_dashboard',compact('orders'));
        
        //return view('vendor.vend_dashboard');
        
    }
    
}
