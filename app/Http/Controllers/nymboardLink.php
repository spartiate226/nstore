<?php

namespace App\Http\Controllers;

use App\boutique;
use App\retrait;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class nymboardLink extends Controller
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
    public function __invoke(Request $request,$pseudo,$page)
    {
        switch ($page){
            case "boutique":
                $boutiques=boutique::paginate(25);
                return view('nymBoard.store',compact('boutiques'));
                break;
            case "boutiquedetail":
                return view('nymBoard.boutiquedetail');
                break;
            case "index":
                return view('nymBoard.index');
                break;
            case "packs":
                return view('nymBoard.packs');
                break;
            case "user":
                $users=User::paginate(25);
                $role_id=1;
                return view('nymBoard.user',compact('users','role_id'));
                break;
            case "profile":
                return view('nymBoard.profile');
                break;
            case "demande_retrait":
                $retraits=retrait::paginate(10);
                return view('nymBoard.retrait.demande',compact('retraits'));
                break;
            case "historique_retrait":
                $retraits=retrait::paginate(10);
                return view('nymBoard.retrait.historique',compact('retraits'));
                break;
            case "theme":
                return view('nymBoard.theme');
                break;
            case "profile":
                return view('nymBoard.profile');
                break;
            case "demandeboutique":
                return view('nymBoard.demandeboutique');
                break;

        }
    }
}
