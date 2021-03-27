<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class zone extends Model
{
    protected $guarded=[];
    function quartiers(){
        return $this->hasMany(quartier::class);
    }
    function ville(){
        return $this->belongsTo(ville::class);
    }
}
