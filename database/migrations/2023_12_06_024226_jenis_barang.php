<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class JenisBarang extends Migration
{
    public function up()
    {
        Schema::create('tbl_jenis_barang', function (Blueprint $table) {
            $table->id();
            $table->integer('nama_jenis')->nullable();
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
        Schema::dropIfExists('tbl_jenis_barang');
    }
}
