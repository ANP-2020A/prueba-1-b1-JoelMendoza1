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

Route::get('articles', 'ProductController@index');
Route::get('articles/{id}', 'ProductController@show');
Route::post('articles', 'ProductController@store');
Route::put('articles/{id}', 'ProductController@update');
Route::delete('articles/{id}', 'ProductController@delete');

Route::get('articles', 'CustomersController@index');
Route::get('articles/{id}', 'CustomersController@show');
Route::post('articles', 'CustomersController@store');
Route::put('articles/{id}', 'CustomersController@update');
Route::delete('articles/{id}', 'CustomersController@delete');
