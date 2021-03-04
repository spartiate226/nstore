<?php

namespace App\Http\Controllers;

use App\categorie;
use App\Http\Requests\CategorieRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class categoriecontroller extends Controller
{

    public function index()
    {
        $categorie=Auth::user()->boutique->categorie;
        return view('dashboard.produit.categorie',compact('categorie'));
    }


    public function create()
    {
        return view('dashboard.produit.categorie');
    }


    public function store(CategorieRequest $request)
    {
        $donne=$request->all();
        $donne['boutique_id']=Auth::user()->boutique->id;
        if (categorie::create($donne)){
            return redirect()->route('categorie.index')->with('reponse','Enregistrer avec succès!!');
        }else{
            return redirect()->route('categorie.index')->with('reponse','Erreur inconnu...');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function show(categorie $categorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit(categorie $categorie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function update(CategorieRequest $request, $categorie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$categorie)
    {
        $cat=$request->except(['_method','_token']);
        foreach ($cat as $cat){
            $catego=categorie::find($cat);
            $catego->delete();
        }
        return redirect()->route('categorie.index')->with('reponse','Suppression excutée');
    }
}
