<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    protected $table='template';
    protected $fillable = ['kode_template', 'kode_type_template', 'deskripsi'];
    //
}
