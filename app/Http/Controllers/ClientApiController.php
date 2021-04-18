<?php

namespace App\Http\Controllers;

use App\onelivreurClient;
use App\onelivreurLocation;
use App\pays;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class ClientApiController extends Controller
{
    function signup(Request $request){
        $donne=$request->all();
        $donne['api_token']=Str::random(100);
        $client=onelivreurClient::create($donne);
        return Response()->json(["token"=>$client->api_token]);
    }
    function login(Request $request){
        if (Auth::attempt(['identifiant' => $request->identifiant])) {
            return onelivreurClient::where("identifiant","=",$request->identifiant)->get()[0];
        }else{
            return Response()->json(["auth"=>"false"]);
        }
    }

    function myLocate($id){
        $client=onelivreurClient::find($id);
        return $client->location;
    }
    function DelmyLocate($id){
        $lieu=onelivreurLocation::find($id);
        $lieu->delete();
        return Response()->json(['reponse'=>"ok"]);
    }

    function AddmyLocate(Request $request,$client){
        $donne=$request->all();
        $donne['onelivreur_client_id']=$client;

        $le=onelivreurLocation::create($donne);
        $le->update(['code'=>Str::random(2).$le->id.Str::random(2)]);
        return Response()->json(['reponse'=>"ok"]);
    }
    function getPays(){
        return pays::all();
    }
    function ville($pays){
        return pays::find($pays)->villes;
    }

}
