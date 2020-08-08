<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateDesign extends Model
{
    protected $table='template_design';
    protected $fillable = ['kode_template_design', 'deskripsi'];
    //
}
