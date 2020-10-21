<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::post('/category', 'App\Http\Controllers\CategoryController@create');
Route::get('/category', 'App\Http\Controllers\CategoryController@all');

Route::post('/transaction', 'App\Http\Controllers\TransactionController@create');
Route::get('/transaction', 'App\Http\Controllers\TransactionController@all');
