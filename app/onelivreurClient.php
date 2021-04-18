<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class onelivreurClient extends Model
{
    function Lieu(){
        return $this->hasMany(onelivreurLocation::class);
    }
}
