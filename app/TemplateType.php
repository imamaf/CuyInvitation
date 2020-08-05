<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateType extends Model
{
    protected $table='template_type';
    protected $fillable = ['kode_type_template', 'deskripsi'];
    //
}
