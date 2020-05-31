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
            $table->string('nama_template' , 50);
            $table->string('url_gambar', 255);
            $table->integer('harga_template');
            $table->string('deskripsi_template' , 255);
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
