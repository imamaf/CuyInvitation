<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAttributTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_attribut', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('nama' ,50)->nullable();
            $table->string('jenis_kelamin' ,50)->nullable();
            $table->string('no_hp' ,20)->nullable();
            $table->string('alamat' ,255)->nullable();
            $table->string('path_foto' ,255)->nullable();
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
        Schema::dropIfExists('user_attribut');
    }
}
