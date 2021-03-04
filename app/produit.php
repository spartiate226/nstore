<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produit extends Model
{
    protected $guarded=[];
    function categorie(){
        return $this->belongsTo(categorie::class);
    }
}
