<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class portefeuilleType extends Model
{
    function portefeuiles(){
        return $this->hasMany(portefeuille::class);
    }
}
