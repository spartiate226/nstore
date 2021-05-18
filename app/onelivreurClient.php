<?php

namespace App;



use Illuminate\Foundation\Auth\User as Authenticatable;

class onelivreurClient extends Authenticatable
{
    protected  $fillable=["pseudonyme","password","api_token"];
    function Lieu(){
        return $this->hasMany(onelivreurLocation::class);
    }
}
