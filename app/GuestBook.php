<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuestBook extends Model
{
    protected $table = 'guestbook';
    protected $primary = ['id','user_id','template_id'];
    protected $fillable = [
        'tempate_id','nama_tamu','alamat','status_hubungan','status_kehadiran'
    ];

    public function template_customer() {
        return $this->hasMany(Template_customer::class, 'user_id', 'id');
    }

    protected $hidden = [];
}
