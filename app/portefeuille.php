<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class portefeuille extends Model
{
    protected $guarded=[];
    function boutique(){
        return $this->belongsTo(boutique::class);
    }
    function states(){
        return $this->hasMany(portefeuilleState::class);
    }
}
