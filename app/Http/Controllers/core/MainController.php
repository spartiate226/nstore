<?php

namespace App\Http\Controllers\core;

use App\boutique;
use App\Http\Controllers\Controller;
use App\storeActiveTemplate;
use Illuminate\Http\Request;

class MainController extends Controller
{
    function index($site){
        $boutique=boutique::where('slug','=',$site);
        if (!$boutique){

        }
        $template=$boutique->template;
        session('info',["store"=>$boutique,"template"=>$template]);
        return redirect('page/index');
    }

    function dash(){
        return view('dasboard.index');
    }
    function commande($requete=null){
        return view('dasboard.livraison.livaison');
    }
    function add_categorie($requete=null){
        return view('dasboard.produit.addcategorie');
    }
    function categorie($requete=null){
        return view('dasboard.produit.categorie');
    }
    function add_prod($requete=null){
        return view('dasboard.produit.addprod');
    }
    function produit($requete=null){
        return view('dasboard.produit.produit');
    }
    function market($requete=null){
        return view('dashboard.theme.market');
    }
    function upload_theme($requete=null){
        return view('dashboard.theme.upload');
    }
    function add_user($requete=null){
        return view('dashboard.utilisateur.add');
    }
    function user($requete=null){
        return view('dashboard.utilisateur.utilisateur');
    }
    function profile($requete=null){
        return view('dashboard.utilisateur.profile');
    }


}
