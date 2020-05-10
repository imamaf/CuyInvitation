<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAttributsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_attributs', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('nama' ,50);
            $table->string('no_hp' ,20);
            $table->string('alamat' ,255);
            $table->string('path_foto' ,255);
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
        Schema::dropIfExists('user_attributs');
    }
}
