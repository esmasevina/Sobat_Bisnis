<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEdubisnisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('edubisnis', function (Blueprint $table) {
            $table->id();
            $table->string('filter');
            $table->string('juduldepan')->unique();
            $table->string('tema');
            $table->string('title');
            $table->string('author');
            $table->timestamp('publish_at')->nullable();
            $table->string('titlebawah');
            $table->string('foto')->nullable();
            $table->text('kontenatas');
            $table->text('kontenbawah');
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
        Schema::dropIfExists('edubisnis');
    }
}
