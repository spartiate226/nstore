<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class commande extends Model
{
    function boutique(){
        return $this->belongsTo(boutique::class);
    }
}
