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



Route::group(['domain'=>"{store}.mynayamax.com"],function ($store){
    dd($store);
});

Route::get('/', function () {
    return view('front.location');
});

Route::resource('categorie','categoriecontroller');
Route::resource('produit','produitcontroller');
Route::post('customizer','customizerController@customizer');
Route::get('admin/login',"Logincontroller@vue");
Route::get('addItem',"cartController@add");
Route::get('delItem',"cartController@delete");
Route::get('erasecart',"cartController@destroy");
Route::post('admin/login',"Logincontroller@login");
Route::get('admin/logout',"Logincontroller@logout");

Route::post('client/login','StoreAuthcontroller@login');
Route::post('client/register','StoreAuthcontroller@register');
Route::get('client/logout','StoreAuthcontroller@logout');

Route::post('upload','boutiqueController@loadmedia');
Route::post('addUser/{role}','UserController@store');
Route::get('changeTheme/{theme}','boutiqueController@changeTheme');
Route::post('dashboard/upload_theme','boutiqueController@upload_theme');
Route::post('addBoutique',"boutiqueController@addBoutique")->middleware('Roleverifier:1');
Route::post('addpack',"packController@addpack")->middleware('Roleverifier:1');
Route::get('dashboard/{page}',"vendorLink")->middleware('Roleverifier:3');
Route::get('store/{slug}/{page?}',"storeLink");
Route::get('nym/{page}',"nymboardLink")->middleware('Roleverifier:1');
Route::get('1livreur/{page}',"livreurLink")->middleware('Roleverifier:2');
