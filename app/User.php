<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Role;
use App\User_attribut;
use App\Testimoni;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    public function role()
    {
    	return $this->hasOne('App\Role');
    }
    
    public function user_attribut()
    {
    	return $this->hasOne('App\User_attribut');
    }
    public function testimoni()
    {
    	return $this->hasOne('App\Testimoni');
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
