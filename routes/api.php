<?php


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

  Route::post('/send','App\Http\Controllers\emailcontroller@sendEmailOrder');
  Route::post('/v2/send','App\Http\Controllers\emailtuecontroller@sendEmailOrder');
