<?php

namespace App\Http\Controllers;

use App\boutique;
use App\categorie;
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
    public function __invoke(Request $request,$slug,$page,$store_id)
    {
        switch($page){
            case null:
                return view('dashboard.index',compact('slug'));
            break;

            case "commande":
                $boutique=boutique::find($store_id);
                $commandes=$boutique->commande->paginate(10);
                return view('dashboard.livraison.livaison',compact('slug','commandes'));
            break;

            case "add_categorie":
                return view('dashboard.produit.addcategorie',compact('slug'));
            break;

            case "categorielist":
                $categorie=categorie::where('boutique_id',"=",Auth::user()->boutique->id)->paginate(25);
                 return view('dashboard.produit.categorie',compact('slug','categorie'));
            break;

            case "add_prod":
                return view('dashboard.produit.addprod',compact('slug'));
            break;

            case "produitlist":
                 $produits=produit::where('boutique_id',"=",Auth::user()->boutique->id)->paginate(25);
                 return view('dashboard.produit.produit',compact('produits','slug'));
            break;

            case "market":
                 return view('dashboard.theme.market',compact('slug'));
            break;

            case "upload_theme":
                return view('dashboard.theme.upload');
            break;
            case "customizer":
                $config=new setting(Auth::user()->boutique);
                return view('dashboard.theme.customizer',compact('config','slug'));
                break;

            case "add_user":
                 return view('dashboard.utilisateur.add',compact('slug'));
            break;

            case "user":
                $role_id=3;
                $users=User::where('storegroup_id',"=",Auth::user()->group->id)->paginate(25);
                return view('dashboard.utilisateur.utilisateur',compact('users','slug','role_id'));
            break;

            case "profile":
                 return view('dashboard.utilisateur.profile',compact('slug'));
            break;
            case "phototeque":
                return view('dashboard.phototeque',compact('slug'));
                break;

        }
    }
}
