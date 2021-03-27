<?php

namespace App\Http\Controllers;

use App\User;
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
                $role_id=2;
                $users=User::where('role_id','=',2);
                return view("1livreur.collaborateur",compact('role_id','users'));
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
                $role_id=4;
                $users=User::where('role_id','=',4)->paginate(30);

                return view("1livreur.livreur",compact('role_id','users'));
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
