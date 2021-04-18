<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

class LivreurApiController extends Controller
{
    function login(Request $request){
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return Response()->json(['reponse'=>"ok"]);
        }else{
            return Response()->json(['reponse'=>"false"]);
        }
    }
    function Asks($livreur){
        
    }
    function wallet($livreur){

    }
    function askdetail($ask){

    }
    function AfterPaiement(){

    }

}
