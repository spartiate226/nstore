<?php

use App\User;
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


Route::group(['domain'=>'user.{loginpseudo}.mynayamax.test'],function(){

    Route::middleware(["isnayamax"])->group(function (){
        Route::get('/',function (){
            return redirect("admin/login");
        });
        Route::get('admin/login',"Logincontroller@vue");
        Route::post('admin/login',"Logincontroller@login");
        Route::get('admin/logout',"Logincontroller@logout");



        Route::post('upload','boutiqueController@loadmedia');
        Route::post('addUser/{role}','UserController@store');
        Route::post('addBoutique',"boutiqueController@addBoutique")->middleware('Roleverifier:1');
        Route::post('addpack',"packController@addpack")->middleware('Roleverifier:1');
        Route::get('nym/{page}',"nymboardLink")->middleware('Roleverifier:1');

        Route::get('1livreur/pays','localiteControlller@pays')->middleware('Roleverifier:2');
        Route::post('1livreur/pays','localiteControlller@paysRegister')->middleware('Roleverifier:2');
        Route::get('1livreur/villes','localiteControlller@ville')->middleware('Roleverifier:2');
        Route::get('1livreur/zones','localiteControlller@zone')->middleware('Roleverifier:2');
        Route::get('1livreur/quartiers','localiteControlller@quartier')->middleware('Roleverifier:2');
        Route::post('1livreur/villes','localiteControlller@villeRegister')->middleware('Roleverifier:2');
        Route::post('1livreur/zones','localiteControlller@zoneRegister')->middleware('Roleverifier:2');
        Route::post('1livreur/quartiers','localiteControlller@quartierRegister')->middleware('Roleverifier:2');
        Route::get('1livreur/{page}',"livreurLink")->middleware('Roleverifier:2');



        Route::get('livreur/{page}',"coursierController");



    });
});











Route::group(['domain'=>'{slug}.mynayamax.test'],function(){


    Route::middleware(["isshop"])->group(function (){

        Route::get('/admin/{pseudo}',function ($slug,$pseudo){
            $user=User::where("pseudonyme","=",$pseudo)->first();
            if ($user==null){
                abort(403);
            }else{
                return redirect("admin/login");
            }
        });
        Route::get('admin/login',"VendorLoginController@vendorvue");
        Route::post('admin/login',"VendorLoginController@vendorlogin");
        Route::get('admin/logout',"VendorLoginController@vendorlogout");

        Route::get('cart/addItem',"cartController@add");
        Route::get('cart/delItem',"cartController@delete");
        Route::get('cart/erasecart',"cartController@destroy");
        Route::post('client/login','StoreAuthcontroller@login');
        Route::post('client/register','StoreAuthcontroller@register');
        Route::get('client/logout','StoreAuthcontroller@logout');


        Route::post('dashboard/customizer','customizerController@customizer');
        Route::resource('dashboard/categorie','categoriecontroller')->middleware('Roleverifiervendor');
        Route::resource('dashboard/produit','produitcontroller')->middleware('Roleverifiervendor');
        Route::get('dashboard/changeTheme/{theme}','boutiqueController@changeTheme')->middleware('Roleverifiervendor');
        Route::post('dashboard/upload_theme','boutiqueController@upload_theme')->middleware('Roleverifiervendor');

        Route::post('dashboard/addAnnexe','boutiqueController@addAnnexe')->middleware('Roleverifiervendor');

        Route::post('commande/place','commandecontroller@makecommande');
        Route::get('dashboard/Asklivraison/{commande}','commandecontroller@attribLivreurView')->middleware('Roleverifiervendor');
        Route::post('dashboard/Asklivraison','commandecontroller@attribLivreur')->middleware('Roleverifiervendor');
        Route::get('dashboard/LivraisonDetail','commandecontroller@Livraisondetail')->middleware('Roleverifiervendor');
        Route::post('dashboard/changeLivreur','commandecontroller@changeLivreur')->middleware('Roleverifiervendor');


        Route::get('dashboard/{page?}',"vendorLink")->middleware('Roleverifiervendor');

        Route::get('/{page?}/{params?}',"storeLink");


    });
});



Route::get('/', function () {
    return view('front.location');
});



