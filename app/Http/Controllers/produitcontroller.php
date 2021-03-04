<?php

namespace App\Http\Controllers;

use App\produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class produitcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return  view('dashboard.produit.produit');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $donne=$request->all();
        $donne['image1']=$request->image1->store(Auth::user()->boutique->id.'/images','themes_path');
        $donne['image2']=$request->image2->store(Auth::user()->boutique->id.'/images','themes_path');
        $donne['image3']=$request->image3->store(Auth::user()->boutique->id.'/images','themes_path');
        $donne['boutique_id']=Auth::user()->group->boutique->id;
        if (produit::create($donne)){
             return redirect()->route('produit.index')->with('reponse','Enregistrer avec succès!!');
        }else{
             return redirect()->route('produit.index')->with('reponse','Erreur inconnu...');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function show(produit $produit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function edit(produit $produit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, produit $produit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function destroy(produit $produit)
    {
        //
    }
}
