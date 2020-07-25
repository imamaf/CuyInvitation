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
            $table->integer('user_id')->nullable();
            $table->string('kode_template')->nullable();
            $table->string('banner' , 255)->nullable();
            $table->string('links' , 255)->nullable();
            $table->string('nama_mempelai_pria' , 50)->nullable();
            $table->string('nama_panggilan_pria' , 50)->nullable();
            $table->string('nama_mempelai_wanita' , 50)->nullable();
            $table->string('nama_panggilan_wanita' , 50)->nullable();
            $table->string('nama_orang_tua_pria_bapak' , 50)->nullable();
            $table->string('nama_orang_tua_pria_ibu' , 50)->nullable();
            $table->string('nama_orang_tua_wanita_bapak' , 50)->nullable();
            $table->string('nama_orang_tua_wanita_ibu' , 50)->nullable();
            $table->string('lokasi_akad' , 255)->nullable();
            $table->dateTime('tgl_akad')->nullable();
            $table->dateTime('tgl_resepsi')->nullable();
            $table->string('path_foto_pria' , 255)->nullable();
            $table->string('path_foto_wanita' , 255)->nullable();
            $table->string('path_video' , 255)->nullable();
            $table->string('deskripsi')->nullable();
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
