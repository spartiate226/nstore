<?php

namespace App\Http\Controllers\paiement;

use App\Events\onretraitStatechange;
use App\Http\Controllers\Controller;
use App\retrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class retraitController extends Controller
{

    /**
     * retraitController constructor.
     */
    public function __construct()
    {
        $this->middleware("auth");
    }

    function fromBoutique(Request $request){
        $data=$request->validate(["moyen"=>"required"]);
        $data["boutique_id"]=Auth::user()->group->boutique->id;
        $data["montant"]=Auth::user()->group->boutique->portefeuille->montant;
        $retrait=retrait::create($data);
        event(new onretraitStatechange(1,$retrait));
        return redirect('dashboard/historique_retrait')->with(["reponse"=>"Demande envoyer avec succès."]);
    }
    function fromLivreur(Request $request){
        $data=$request->validate(["moyen"=>"required"]);
        $data["livreur_id"]=Auth::user()->id;
        $data["montant"]=Auth::user()->group->boutique->portefeuille->montant;
        $retrait=retrait::create($data);
        event(new onretraitStatechange(1,$retrait));
        return redirect('dashboard/historique_retrait')->with(["reponse"=>"Demande envoyer avec succès."]);
    }
}
