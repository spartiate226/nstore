<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class storepack extends Model
{
    protected $guarded=[];
    function boutique(){
        return $this->belongsTo(boutique::class);
    }
    function pack(){
        return $this->belongsTo(pack::class);
    }
}
