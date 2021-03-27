<?php

namespace App\Http\Controllers;

use App\pays;
use App\quartier;
use App\ville;
use App\zone;
use Illuminate\Http\Request;

class localiteControlller extends Controller
{
    function zoneRegister(Request $request){
        $cr=zone::create($request->all());
        if ($cr){
            return redirect('1livreur/zones')->with(['reponse'=>'Succès!!']);
        }
    }
    function villeRegister(Request $request){
        $cr=ville::create($request->all());
        if ($cr){
            return redirect('1livreur/villes')->with(['reponse'=>'Succès!!']);
        }
    }
    function quartierRegister(Request $request){
        $cr=quartier::create($request->all());
        if ($cr){
            return redirect('1livreur/quartiers')->with(['reponse'=>'Succès!!']);
        }
    }


    function paysRegister(Request $request){
        $cr=pays::create($request->all());
        if ($cr){
            return redirect('1livreur/pays')->with(['reponse'=>'Succès!!']);
        }
    }



    function pays(){
        return view('1livreur.pays',['pays'=>pays::paginate(25)]);
    }

    function zone(){
        return view('1livreur.zone',['zones'=>zone::paginate(25)]);
    }
    function ville(){
        return view('1livreur.ville',['villes'=>ville::paginate(25)]);
    }
    function quartier(){
        return view('1livreur.quartier',['quartiers'=>quartier::paginate(25)]);
    }
}
