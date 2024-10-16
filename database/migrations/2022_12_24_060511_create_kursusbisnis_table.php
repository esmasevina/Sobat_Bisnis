<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKursusbisnisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kursusbisnis', function (Blueprint $table) {
            $table->id();
            $table->string('juduldepan')->unique();
            $table->string('tema');
            $table->string('title');
            $table->text('isi');
            $table->string('tanggaldaftar');
            $table->string('tanggaltutup');
            $table->string('tanggalmulai');
            $table->string('durasi');
            $table->string('kelaslive');
            $table->string('harga');
            $table->text('link');
            $table->string('foto')->nullable();
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
        Schema::dropIfExists('kursusbisnis');
    }
}
