<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class portefeuilleState extends Model
{
    protected $guarded=[];
    function portefeuille(){
        return $this->belongsTo(portefeuille::class);
    }
}
