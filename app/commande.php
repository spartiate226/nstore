<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class commande extends Model
{
    protected $guarded=[];
    function boutique(){
        return $this->belongsTo(boutique::class);
    }
}
