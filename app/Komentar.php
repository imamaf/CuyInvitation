<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
     protected $table = 'komentar';
     protected $fillable = ['nama','template_id', 'path_foto', 'deskripsi','aktif_flag'];
    //
}
