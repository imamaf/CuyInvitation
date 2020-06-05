<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto_gallery extends Model
{
    protected $table = 'foto_gallery';
    protected $fillable = ['user_id', 'template_id', 'path_foto'];
    //
}
