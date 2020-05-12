<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListTranksaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_tranksaksis', function (Blueprint $table) {
            $table->integer('user_id')->primary();
            $table->string('kode_transaksi' , 30);
            $table->string('template_id');
            $table->string('pembayaran');
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
        Schema::dropIfExists('list_tranksaksis');
    }
}
