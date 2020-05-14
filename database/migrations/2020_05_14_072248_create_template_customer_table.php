<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemplateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('template_customer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('links' , 255);
            $table->string('nama_mempelai_pria' , 50);
            $table->string('nama_mempelai_wanita' , 50);
            $table->string('nama_orang_tua_pria_bapak' , 50);
            $table->string('nama_orang_tua_pria_ibu' , 50);
            $table->string('nama_orang_tua_wanita_bapak' , 50);
            $table->string('nama_orang_tua_wanita_ibu' , 50);
            $table->string('lokasi_akad' , 255);
            $table->dateTime('tgl_akad');
            $table->dateTime('tgl_resepsi');
            $table->string('path_foto_pria' , 255);
            $table->string('path_foto_wanita' , 255);
            $table->string('path_video' , 255);
            $table->string('deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('template_customer');
    }
}
