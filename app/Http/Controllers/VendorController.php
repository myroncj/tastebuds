<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Vendor;

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
    
}
