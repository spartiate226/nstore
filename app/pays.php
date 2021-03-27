<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pays extends Model
{
    protected $guarded=[];
    function villes(){
        return $this->hasMany(ville::class);
    }
}
