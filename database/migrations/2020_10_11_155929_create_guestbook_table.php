<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuestbookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('GuestBook', function (Blueprint $table) {
            $table->increments('id');
            $table->string('template_id',10)->nullable();
            $table->string('nama_tamu',30)->nullable();
            $table->string('alamat',200)->nullable();
            $table->string('hubungan',30)->nullable();
            $table->string('status_kehadiran',30)->nullable();
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
        Schema::dropIfExists('GuestBook');
    }
}
