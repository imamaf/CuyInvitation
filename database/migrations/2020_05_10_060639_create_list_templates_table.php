<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_templates', function (Blueprint $table) {
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
            $table->string('gallery_foto_1' , 255);
            $table->string('gallery_foto_2' , 255);
            $table->string('gallery_foto_3' , 255);
            $table->string('gallery_foto_4' , 255);
            $table->string('gallery_foto_5' , 255);
            $table->string('gallery_foto_6' , 255);
            $table->string('gallery_foto_7' , 255);
            $table->string('gallery_foto_8' , 255);
            $table->string('gallery_foto_9' , 255);
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
        Schema::dropIfExists('list_templates');
    }
}
