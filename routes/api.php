<?php

use App\Customers;
use App\Products;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
//Products


//Customers
Route::post('register', 'UserController@register');
Route::post('login', 'UserController@authenticate');
Route::get('product', 'ProductController@index');
Route::get('product/{id}', 'ProductController@show');

Route::group(['middleware' => ['jwt.verify']], function() {

    Route::get('user', 'UserController@getAuthenticatedUser');

    Route::post('product', 'ProductController@store');
    Route::put('product/{id}', 'ProductController@update');
    Route::delete('product/{id}', 'ProductController@delete');

    Route::get('customer', 'CustomersController@index');
    Route::get('customer/{id}', 'CustomersController@show');
    Route::post('customer', 'CustomersController@store');
    Route::put('customer/{id}', 'CustomersController@update');
    Route::delete('customer/{id}', 'CustomersController@delete');
});
