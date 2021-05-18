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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::post('signup',"ClientApiController@signup");
Route::post('new-locate',"ClientApiController@AddmyLocate");
Route::get('locations/{id}',"ClientApiController@myLocate");
Route::get('dellocation/{id}',"ClientApiController@DelmyLocate");
Route::post('verificator',"ClientApiController@login");
Route::get('pays',"ClientApiController@getPays");
Route::get('paysville/{pays}',"ClientApiController@ville");
