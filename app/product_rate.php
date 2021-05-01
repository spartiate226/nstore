<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_rate extends Model
{
    function user(){
        return $this->belongsTo(User::class);
    }
}
