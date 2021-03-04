<?php

namespace App\Http\Controllers;

use App\fonctionnalite_pack;
use App\pack;
use Illuminate\Http\Request;

class packController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request,$page)
    {
        switch ($page){
            case "addpack":
                dd($request->all());
                break;
        }
    }
    function addpack(Request $request){
        $pack=pack::create([
            "nom"=>$request->nom,
            "prix"=>$request->prix,
        ]);
        $fonct=$request->except(['nom','prix','_token']);
        foreach ($fonct as $fonc){
            fonctionnalite_pack::create([
                'pack_id'=>$pack->id,
                'fonctionnalite_id'=>$fonc
            ]);
        }
        return redirect('nym/packs');
    }
}
