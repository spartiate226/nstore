<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produit extends Model
{
    protected $fillable=['nom',
'prix',
'categorie_id',
'prix_promo',
'disponibilite',
'description',
'image1',
 "boutique_id",
'image2',
'image3'];
    function categorie(){
        return $this->belongsTo(categorie::class);
    }

    function comments(){
        return $this->hasMany(product_comment::class);
    }
    function rates(){
        return $this->hasMany(product_rate::class);
    }
}
