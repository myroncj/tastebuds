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
    return view('welcome');
});

  Route::get('/Clogin','CustomerController@login');

  Route::post('/Clogin/login','CustomerController@verify');

  Route::get('/Creg', 'CustomerController@register');

  Route::post('/Creg/reg', 'CustomerController@store');

  Route::get('/Clogout','CustomerController@Clogout');

  Route::get('/Cexpire','CustomerController@Cexpire');

Route::group(['middleware' => 'cust'], function () {

  Route::get('/Cwallet', 'CustomerController@wallet');

  Route::post('/Cwallet/add','CWalletController@wallet_add');

  Route::get('/Chome','CustomerController@homepage');

  Route::get('/Cmenu','CustomerController@menu');

});


Route::get('/Vreg','VendorController@register');

Route::post('/Vreg/reg','VendorController@store');

Route::get('/Vlogin','VendorController@login');

Route::post('/Vlogin/login','VendorController@verify');

Route::get('/Vdash','VendorController@dashboard');

Route::get('/Vfood','VendorController@food');

Route::post('/Vfood/add','FoodItemController@food_add');

Route::get('/logout','VendorController@logout');





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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('vendor_register', 'VendorAuth\RegisterController@showRegistrationForm');
Route::post('vendor_register', 'VendorAuth\RegisterController@register');

Route::get('/Vendor_home', function(){
  return view('vendor.home');
});
