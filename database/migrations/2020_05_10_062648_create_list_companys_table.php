<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListCompanysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_companys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('links' , 255);
            $table->string('banner_1' , 255);
            $table->string('banner_2' , 255);
            $table->string('banner_3' , 255);
            $table->string('deskripsi_banner' , 255);
            $table->string('nama_testimoni' , 50);
            $table->string('path_foto' , 255);
            $table->string('deskripsi_testimoni' , 255);
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
        Schema::dropIfExists('list_companys');
    }
}
