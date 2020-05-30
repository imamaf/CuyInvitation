<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transaction';
    protected $fillable = ['user_id', 'kode_transaksi', 'template_id', 'pembayaran'];
    //
}
