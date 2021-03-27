<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ville extends Model
{
    protected $guarded=[];
    function zones(){
        return $this->hasMany(zone::class);
    }
    function pays(){
        return $this->belongsTo(pays::class);
    }
}
