<?php

namespace App\Http\Controllers;

use App\module\setting;
use App\produit;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class vendorLink extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */



    public function __construct()
    {
        //$this->middleware('auth');
    }
    public function __invoke(Request $request,$page)
    {
        switch($page){
            case "dash":
                return view('dashboard.index');
            break;

            case "commande":
                return view('dashboard.livraison.livaison');
            break;

            case "add_categorie":
                return view('dashboard.produit.addcategorie');
            break;

            case "categorie":
                 return view('dashboard.produit.categorie');
            break;

            case "add_prod":
                return view('dashboard.produit.addprod');
            break;

            case "produit":
                 $produits=produit::where('boutique_id',"=",Auth::user()->boutique->id)->paginate(25);
                 return view('dashboard.produit.produit',compact('produits'));
            break;

            case "market":
                 return view('dashboard.theme.market');
            break;

            case "upload_theme":
                return view('dashboard.theme.upload');
            break;
            case "customizer":
                $config=new setting(Auth::user()->boutique);
                return view('dashboard.theme.customizer',compact('config'));
                break;

            case "add_user":
                 return view('dashboard.utilisateur.add');
            break;

            case "user":
                $users=User::where('storegroup_id',"=",Auth::user()->group->id)->paginate(25);
                return view('dashboard.utilisateur.utilisateur',compact('users'));
            break;

            case "profile":
                 return view('dashboard.utilisateur.profile');
            break;
            case "phototeque":
                return view('dashboard.phototeque');
                break;

        }
    }
}
