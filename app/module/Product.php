<?php


namespace App\module;


use App\categorie;
use App\produit;

class Product
{
    function getAll($paginate=null){
        if ($paginate==null){
            return produit::where('boutique_id',"=",session('boutique_id'))->get();
        }else{
            return produit::where('boutique_id',"=",session('boutique_id'))->paginate($paginate);
        }
    }
    function get($id){
        return produit::find($id);
    }
    function category($id=null){
        if ($id==null){

            return categorie::where('boutique_id',"=",session('boutique_id'))->get();
        }
    }
    function filter($bycategorie,$byprice='',$bydate=''){
        categorie::find($bycategorie)->produits;
    }
    function search(){

    }
}
