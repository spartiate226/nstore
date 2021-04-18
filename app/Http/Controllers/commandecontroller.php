<?php

namespace App\Http\Controllers;

use App\boutique;
use App\boutiqueAnnexe;
use App\commande;
use App\commandeLivraison;
use App\Events\ontransaction;
use App\quartier;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class commandecontroller extends Controller
{
    function mycommande($slug){
        $boutique=boutique::where('slug',"=",$slug)->get()[0];
        return $boutique->commande->paginate(10);
    }

    function facture(Request $request){

    }
    function makecommande(Request $request,$slug){
        $boutique=boutique::where('slug',"=",$slug)->get()[0];
        $donne=$request->only(['client_nom',
        'client_prenom',
        'quartier_id',
        'client_tel',
        'description',
        'total']);

        $pro=$request->except([
        '__token',
        'client_nom',
        'client_prenom',
        'quartier_id',
        'client_tel',
        'description',
        'total',
        'longitude',
        'latitude',
        ]);

        $donne['statut_paiment']='En cours';
        $donne['commande_livraison_id']=1;
        $donne['produit']=json_encode($pro);
        $donne['coordonne']=json_encode([
            "longitude"=>$request->longitude,
            "latitude"=>$request->latitude
        ]);
        $donne['boutique_id']=$boutique->id;
        $donne['code']=Str::random(5);
        $commande=commande::create( $donne);
        $livraison=commandeLivraison::create([
            'commande_id'=>$commande->id,
            'livraison_statut_id'=>1
        ]);
        return redirect('/checkout')->with(["reponse"=>"Commande placée avec succès.vous pouvez retrouver toute les informations dans votre rubrique historique"]);
    }

    private function checkoutResult(commande $commande){
        $req=true;
        if($req==true){
        $commande->update(['statut_paiment'=>"éffectué"]);
         event(new ontransaction([
            'type'=>1,
            'commande'=>$commande->id,
            'portefeuille_state'=>$commande->boutique->portefeuille->state->id
         ]));
        }
        if($req==false){

        }
    }

    function attribLivreur(Request $request){
        dd($request->all());
    }
    function changeLivreur(Request $request){

    }
    function attribLivreurView(Request $request,$slug,$commande){
        if (isset($request->annexe) && isset($request->heure) && isset($request->heure)) {
            $info=$request->all();
            $zone=quartier::find(boutiqueAnnexe::find($request->annexe)->quartier_id)->zone;
            $livreurs=$zone->livreurs;
            return view('dashboard.livraison.Asklivraison',compact('commande','livreurs','info'));
        }
        $livreurs=null;
        return view('dashboard.livraison.Asklivraison',compact('commande','livreurs'));
    }
    function changeLivreurView(Request $request){
        return view('dashboard.livraison.changeLivreur');
    }
    function Livraisondetail($id){
        return view('dashboard.livraison.livraisondetail');
    }
}
