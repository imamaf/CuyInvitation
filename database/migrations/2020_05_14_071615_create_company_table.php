<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company', function (Blueprint $table) {
            $table->increments('id');
            $table->string('links' , 255);
            $table->string('email' , 50);
            $table->string('telepon' , 20);
            $table->string('alamat' , 255);
            $table->string('banner_1' , 255);
            $table->string('banner_2' , 255);
            $table->string('banner_3' , 255);
            $table->string('deskripsi_banner' , 255);
            $table->string('nama_testimoni' , 50);
            $table->string('path_foto' , 255);
            $table->string('deskripsi_testimoni' , 255);
            $table->string('aktif_flag' , 1);
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
        Schema::dropIfExists('company');
    }
}
