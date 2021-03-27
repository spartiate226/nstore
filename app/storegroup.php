<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class storegroup extends Model
{
    protected $guarded=[];

    function boutique(){
        return $this->belongsTo(boutique::class);
    }
}
