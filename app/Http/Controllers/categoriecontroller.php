<?php

namespace App\Http\Controllers;

use App\categorie;
use App\Http\Requests\CategorieRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class categoriecontroller extends Controller
{

    public function index($slug)
    {
        $categorie=Auth::user()->boutique->categorie;
        return view('dashboard.produit.categorie',compact('categorie','slug'));
    }


    public function create($slug)
    {
        return view('dashboard.produit.categorie',compact('slug'));
    }


    public function store(CategorieRequest $request)
    {
        $donne=$request->all();
        $donne['boutique_id']=Auth::user()->boutique->id;
        if (categorie::create($donne)){
            return redirect('dashboard/categorielist')->with('reponse','Enregistrer avec succès!!');
        }else{
            return redirect('dashboard/categorielist')->with('reponse','Erreur inconnu...');
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
    public function destroy(Request $request)
    {
        $cat=$request->except(['_method','_token']);
        foreach ($cat as $cat){
            $catego=categorie::find($cat);
            $catego->delete();
        }
        return redirect('dashboard/categorielist')->with('reponse','Suppression excutée');
    }
}
