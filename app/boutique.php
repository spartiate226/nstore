<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class boutique extends Model
{
    protected $guarded=[];

    function proprietaire(){
        return $this->belongsTo(User::class);
    }
    function template(){
        return $this->hasOne(storeActiveTemplate::class);
    }
    function categorie(){
        return $this->hasMany(categorie::class);
    }
    function commande(){
        return $this->hasMany(commande::class);
    }

    function storepacks(){
        return $this->hasMany(storepack::class);
    }
    function retraits(){
        return $this->hasMany(retrait::class);
    }
    function portefeuille(){
        return $this->hasOne(portefeuille::class);
    }
}
