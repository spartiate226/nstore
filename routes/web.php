<?php

use Illuminate\Support\Facades\Route;

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
//Route::get('store/{slug}/{page?}','boutiqueController@boutique');



Route::group(['domain'=>'{slug}.mynayamax.com'],function(){

    Route::get('admin/login',"Logincontroller@vendorvue");
    Route::post('admin/login',"Logincontroller@vendorlogin");
    Route::get('admin/logout',"Logincontroller@vendorlogout");

    Route::get('/{page?}',"storeLink");

    Route::get('addItem',"cartController@add");
    Route::get('delItem',"cartController@delete");
    Route::get('erasecart',"cartController@destroy");
    Route::post('client/login','StoreAuthcontroller@login');
    Route::post('client/register','StoreAuthcontroller@register');
    Route::get('client/logout','StoreAuthcontroller@logout');


    Route::post('dashboard/customizer','customizerController@customizer')->middleware('Roleverifiervendor');
    Route::resource('dashboard/categorie','categoriecontroller')->middleware('Roleverifiervendor');
    Route::resource('dashboard/produit','produitcontroller')->middleware('Roleverifiervendor');
    Route::get('dashboard/changeTheme/{theme}','boutiqueController@changeTheme')->middleware('Roleverifiervendor');
    Route::post('dashboard/upload_theme','boutiqueController@upload_theme')->middleware('Roleverifiervendor');
    Route::get('dashboard/{page?}',"vendorLink")->middleware('Roleverifiervendor');

});

Route::get('/', function () {
    return view('front.location');
});

Route::get('admin/login',"Logincontroller@vue");
Route::post('admin/login',"Logincontroller@login");
Route::get('admin/logout',"Logincontroller@logout");



Route::post('upload','boutiqueController@loadmedia');
Route::post('addUser/{role}','UserController@store');
Route::post('addBoutique',"boutiqueController@addBoutique")->middleware('Roleverifier:1');
Route::post('addpack',"packController@addpack")->middleware('Roleverifier:1');
Route::get('nym/{page}',"nymboardLink")->middleware('Roleverifier:1');
Route::get('1livreur/{page}',"livreurLink")->middleware('Roleverifier:2');
