<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('happens', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable(false);
            $table->unsignedBigInteger('idTimetables')->nullable(false);
            $table->unsignedBigInteger('idEvent')->nullable(false);
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('idEvent')->references('id')->on('events')->onDelete('restrict');
            $table->foreign('idTimetables')->references('id')->on('timetables')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('happens');
    }
};
