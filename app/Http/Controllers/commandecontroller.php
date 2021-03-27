<?php

namespace App\Http\Controllers;

use App\boutique;
use App\commande;
use App\commandeLivraison;
use Illuminate\Http\Request;

class commandecontroller extends Controller
{
    function mycommande($store_id){
        $boutique=boutique::find($store_id);
        return $boutique->commande->paginate(10);
    }

    function facture(Request $request){

    }
    function makecommande(Request $request){
        $donne=$request->all();
        $donne['statut_paiment']='En cours';
        $donne['statut_livraison']=1;
        $commande=commande::create( $donne);
        $livraison=commandeLivraison::create([
            'commande_id'=>$commande->id,
            'statut'=>1
        ]);
        if($commande && $livraison){
            $this->checkoutResult($commande);
        }
    }

    private function checkoutResult(commande $commande){
        
    }

    function attribLivreur(Request $request){

    }
    function changeLivreur(Request $request){

    }
    function attribLivreurView(Request $request){
        return view('dashboard.livraison.Asklivraison');
    }
    function changeLivreurView(Request $request){
        return view('dashboard.livraison.changeLivreur');
    }
    function Livraisondetail($id){
        return view('dashboard.livraison.livraisondetail');
    }
}
