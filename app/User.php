<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded=[];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    function boutique(){
        return $this->hasOne(boutique::class);
    }

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    function role(){
        return $this->belongsTo(role::class);
  }
  function group(){
        return $this->belongsTo(storegroup::class,'storegroup_id','id');
  }
  function zone(){
    return $this->belongsTo(zone::class);
  }

    function comments(){
        return $this->hasMany(product_comment::class);
    }
    function rates(){
        return $this->hasMany(product_rate::class);
    }
}
