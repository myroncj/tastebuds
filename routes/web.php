<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
});

Route::get('/Clogin','CustomerController@login');

Route::get('/Creg', 'CustomerController@register');

Route::post('/Creg/reg', 'CustomerController@store');


Route::get('/Vreg','VendorController@register');

Route::post('/Vreg/reg','VendorController@store');





Route::get('/login','CustomerController@index');

Route::get('/login/{cust}','CustomerController@index2');

/*Route::get('/login',function() {
   
    //$names = DB::table('customer')->get();
    
    $names = App\customer::all();
    
    return view('customer.login1',compact('names'));
    
});
*/

/*Route::get('/login/{cust}',function($cust_id) {
    
    //dd($cust_id);
   
    //$name = DB::table('customer')->find($cust_id);
    
    //dd($cust_id);
    
    $name = App\customer::find($cust_id);
    
    return view('customer.login2',compact('name'));
    
});
*/