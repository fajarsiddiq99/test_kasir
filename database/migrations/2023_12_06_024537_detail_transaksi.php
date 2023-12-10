<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DetailTransaksi extends Migration
{
    public function up ()
    {
        Schema::create('tbl_detail_transaksi', function (Blueprint $table){
            $table->id();
            $table->string('no_transaksi');
            $table->integer('id_barang')->nullable();
            $table->integer('qty')->nullable();
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
        Schema::dropIfExists('tbl_detail_transaksi');
    }
}
