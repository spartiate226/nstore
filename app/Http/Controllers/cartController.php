<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cartController extends Controller
{
    public function add(Request $request)
    {
        if (session()->exists("panier-" . $request->boutique_id)) {

            if (session()->exists("panier-" . $request->boutique_id . ".prod-" . $request->id)) {
                $prod = session("panier-" . $request->boutique_id . ".prod-" . $request->id);
                $prod['quantite'] = $prod['quantite'] + $request->quantite;
                session()->forget("panier-" . $request->boutique_id .".prod-". $request->id);
                session()->put("panier-" . $request->boutique_id . ".prod-" . $request->id, $prod);
            } else {
                session()->put("panier-" . $request->boutique_id . ".prod-" . $request->id, ["id" => $request->id, "quantite" => $request->quantite]);
            }

        } else {
            session(["panier-" . $request->boutique_id => ['boutique_id'=>$request->boutique_id]]);

            session()->put("panier-" . $request->boutique_id . ".prod-" . $request->id, ["id" => $request->id, "quantite" => $request->quantite]);
        }
        return redirect()->back()->with(['rrponse'=>'ok']); //->json(["reponse" => session('panier-' . $request->boutique_id)]);
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
