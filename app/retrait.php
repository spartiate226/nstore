<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class retrait extends Model
{
    protected $fillable=["moyen",
"boutique_id",
"retrait_type_id",
"montant"];
}
