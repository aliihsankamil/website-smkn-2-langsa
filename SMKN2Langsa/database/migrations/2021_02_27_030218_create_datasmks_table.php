<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatasmksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datasmks', function (Blueprint $table) {
            $table->id();
            $table->char('npsn', 8);
            $table->string('nama_sekolah', 100);
            $table->string('nama_kepsek', 50);
            $table->string('alamat', 1000);
            $table->string('telpfax')->nullable();
            $table->string('email')->nullable();
            $table->string('instagram')->nullable();
            $table->string('youtube')->nullable();
            $table->string('twitter')->nullable();
            $table->string('facebook')->nullable();
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
        Schema::dropIfExists('datasmks');
    }
}
