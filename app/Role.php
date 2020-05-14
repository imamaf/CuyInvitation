<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Role extends Model
{
    protected $table = 'role';
    protected $fillable = ['user_id','kode_role'];
    public function user()
    {
        return $this->belongsTo('App\user');
    }
    //
}