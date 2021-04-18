<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class zone extends Model
{
    protected $guarded=[];
    function quartiers(){
        return $this->hasMany(quartier::class);
    }
    function livreurs(){
        return $this->hasMany(User::class);
    }
    function ville(){
        return $this->belongsTo(ville::class);
    }
}
