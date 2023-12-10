<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\SchemaState;
use Illuminate\Support\Facades\Schema;

class Diskon extends Migration
{
    public function up()
    {
        Schema::create('tbl_diskon', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('total_belanja');
            $table->integer('diskon')->nullable();
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
        Schema::dropIfExists('tbl_diskon');
    }
}
