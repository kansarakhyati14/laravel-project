<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Session;

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

Route::get('login', function () {
    return view('login');
 
});

Route::get('logout', function () {
    Session::forget('user');
    return redirect('login');
 
});
Route::view('/register','register');
Route::post("/login",[UserController::class,'login']);
Route::post("/register",[UserController::class,'register']);
Route::get('/','App\Http\Controllers\ProductController@index');   
Route::get('detail/{id}','App\Http\Controllers\ProductController@detail');   
Route::post('add_to_cart','App\Http\Controllers\ProductController@addToCart');   
Route::get('cartlist','App\Http\Controllers\ProductController@cartList');  
Route::get('removecart/{id}','App\Http\Controllers\ProductController@removeCart');
Route::get('ordernow','App\Http\Controllers\ProductController@orderNow');  
Route::post('orderplace','App\Http\Controllers\ProductController@orderPlace'); 
Route::get('myorders','App\Http\Controllers\ProductController@myOrders'); 