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
            $table->string('links' , 255)->nullable();
            $table->string('email' , 50)->nullable();
            $table->string('telepon' , 20)->nullable();
            $table->string('alamat' , 255)->nullable();
            $table->string('banner_1' , 255)->nullable();
            $table->string('banner_2' , 255)->nullable();
            $table->string('banner_3' , 255)->nullable();
            $table->string('deskripsi_banner' , 255)->nullable();
            $table->string('aktif_flag' , 1)->nullable();
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
