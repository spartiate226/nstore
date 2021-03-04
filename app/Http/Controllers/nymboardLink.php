<?php

namespace App\Http\Controllers;

use App\boutique;
use App\User;
use Illuminate\Http\Request;

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
    public function __invoke(Request $request,$page)
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
                return view('nymBoard.user',compact('users'));
                break;
            case "profile":
                return view('nymBoard.profile');
                break;

        }
    }
}
