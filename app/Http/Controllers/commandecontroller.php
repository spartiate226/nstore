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
        $donne['statut_livraison']='En attente de validation';
        $commande=commande::create( $donne);
        $livraison=commandeLivraison::create([
            'commande_id'=>$commande->id,
            'statut'=>'En attente de validation'
        ]);
        if($commande && $livraison){
            $this->checkoutResult($commande);
        }
    }

    private function checkoutResult(commande $commande){

    }
}
