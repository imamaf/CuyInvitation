<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemplateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('template_company', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_template' , 50)->nullable();
            $table->string('url_gambar', 255)->nullable();
            $table->integer('harga_template')->nullable();
            $table->string('deskripsi_template' , 255)->nullable();
            $table->string('link' , 255)->nullable();
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
        Schema::dropIfExists('template_company');
    }
}
