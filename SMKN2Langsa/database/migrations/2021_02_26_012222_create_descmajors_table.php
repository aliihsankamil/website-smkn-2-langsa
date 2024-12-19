<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDescmajorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('descmajors', function (Blueprint $table) {
            $table->id();
            // $table->bigInteger('major_id')->unsigned();
            $table->foreignId('major_id')->constrained('majors')->onDelete('cascade')->onUpdate('cascade');
            $table->string('teks', 1000);
            $table->timestamps();
        });

        // Schema::table('descmajors', function (Blueprint $table) {
        //     $table->foreign('major_id')->references('id')->on('majors')->onDelete('cascade')->onUpdate('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('descmajors');
    }
}
