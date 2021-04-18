<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class onelivreurLocation extends Model
{
    function howner(){
        return $this->belongsTo(onelivreurClient::class);
    }
}
