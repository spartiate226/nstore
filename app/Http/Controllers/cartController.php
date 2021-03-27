<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class cartController extends Controller
{
    public function add(Request $request)
    {
        if (session()->exists("panier-". $request->boutique_id)) {

            if (session()->exists("panier-" . $request->boutique_id . ".prod-" . $request->id)) {
                $prod = session("panier-" . $request->boutique_id . ".prod-" . $request->id);
                $prod['quantite'] = $prod['quantite'] + $request->quantite;
                session()->forget("panier-" . $request->boutique_id .".prod-". $request->id);
                session()->put("panier-" . $request->boutique_id . ".prod-" . $request->id, $prod);
            } else {
                session()->put("panier-" . $request->boutique_id . ".prod-" . $request->id, ["id" => $request->id, "quantite" => $request->quantite]);
            }

        } else {
            session(["panier-". $request->boutique_id => []]);

            session()->put("panier-". $request->boutique_id . ".prod-" . $request->id, ["id" => $request->id, "quantite" => $request->quantite]);
        }
        if($request->ajax()){
            return Response()->json(['reponse'=>'ok']);
        }else{
            return redirect()->back()->with(['reponse'=>'ok']);
        }

    }

    public function destroy(Request $request)
    {
        session()->forget("panier-" . $request->boutique_id);
        return redirect()->back()->with(['reponse'=>'Panier Vider']);
    }

    public function delete(Request $request){
        session()->forget("panier-" . $request->boutique_id . ".prod-" . $request->id);
        return redirect()->back()->with(['reponse'=>"Supprimer"]);
    }


}
