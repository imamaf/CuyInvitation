<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Testimoni extends Model
{
    protected $table = 'testimoni';
    protected $primary = ['id','user_id','template_id'];
    protected $fillable = [
         'path_foto', 'nama', 'deskrispi', 'rating',
    ];
    //

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

}
