<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class quartier extends Model
{
    protected $guarded=[];
    function zone(){
        return $this->belongsTo(zone::class);
    }
}
