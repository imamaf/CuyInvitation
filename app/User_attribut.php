<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class User_attribut extends Model
{
    protected $table = 'user_attribut';
    protected $fillable = [
        'user_id', 'nama', 'jenis_kelamin', 'no_hp', 'alamat', 'path_foto',
    ];

    public function user()
    {
        return $this->belongsTo('App\user');
    }
    //
    //
}
