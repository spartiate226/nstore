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

    }
    function addpack(Request $request){
        pack::create($request->all());
        return redirect('nym/packs')->with(["reponse"=>"Succès..."]);
    }
}
