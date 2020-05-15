<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'company';
    protected $fillable = ['links' , 'telepon' , 'email', 'banner_1','banner_2' , 'banner_3' , 'deskripsi_banner' , 'nama_testimoni' , 'path_foto' , 'deskripsi_testimoni' , 'aktif_flag'];
    //
}
