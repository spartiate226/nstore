<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class livreurLink extends Controller
{
    /**
     * livreurLink constructor.
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function __invoke(Request $request,$page)
    {
        switch ($page){
            case "collaborateur":
                return view("1livreur.collaborateur");
                break;
            case "index":
                return view("1livreur.index");
                break;
            case "livraison":
                return view("1livreur.livraison");
                break;
            case "livraisonmap":
                return view("1livreur.livraisonmap");
                break;
            case "livreur":
                return view("1livreur.livreur");
                break;
            case "notification":
                return view("1livreur.notification");
                break;
            case "profile":
                return view('1livreur.profile');
                break;
        }
    }
}
