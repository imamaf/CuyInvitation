<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Template_customer extends Model
{
    protected $table = 'template_customer';
    protected $primary = ['id','user_id','template_id'];
    protected $fillable = [
        'user_id','kode_template', 'links', 'nama_panggilan_pria' , 'nama_panggilan_wanita','nama_mempelai_pria', 'nama_mempelai_wanita','nama_orang_tua_pria_bapak',
        'nama_orang_tua_pria_ibu','nama_orang_tua_wanita_bapak','nama_orang_tua_wanita_ibu','lokasi_akad','tgl_akad','tgl_resepsi', 'banner',
        'path_foto_pria','path_foto_wanita','path_video','deskripsi','latitude','longitude','aktif_flag','gedung_akad','gedung_resepsi'
   ];

    public function subItems() {
        return $this->belongsTo(GuestBook::class, 'template_id', 'id');
    }
    //
}
