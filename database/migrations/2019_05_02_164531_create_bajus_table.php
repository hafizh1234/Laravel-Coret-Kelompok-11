<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBajusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shirts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_baju');
            $table->string('jenis_baju');
            $table->bigInteger('harga_baju');
            $table->integer('jumlah_bajuXL');
            $table->integer('jumlah_bajuL');
            $table->integer('jumlah_bajuM');
            $table->integer('jumlah_bajuS');
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
        Schema::dropIfExists('shirts');
    }
}
