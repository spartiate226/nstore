<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pack extends Model
{
    protected $fillable=[
        'nom',
'prix',
'expiration',
'compte',
'theme',
'traduction_manuelle',
'traduction_auto',
'rapport',
'livraison_externe',
'livraison_express'
    ];

    function storepacks(){
        return $this->hasMany(storepack::class);
    }
}
