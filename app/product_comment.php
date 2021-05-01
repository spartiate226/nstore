<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_comment extends Model
{
    function user(){
        return $this->belongsTo(User::class);
    }

}
