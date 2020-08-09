<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateCompany extends Model
{
    protected $table='template_company';
    protected $fillable = ['nama_template', 'harga_template', 'deskripsi_template', 'link', 'url_gambar' , 'template_company_kode' , 'kode_type_template','kode_template_design'];
    //
}
