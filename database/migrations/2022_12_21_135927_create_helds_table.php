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
        Schema::create('helds', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable(false);
            $table->unsignedBigInteger('idEvent')->nullable(false);
            $table->unsignedBigInteger('idPlace')->nullable(false);
            $table->date('date')->nullable(false);
            $table->time('time')->nullable(false);
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('idEvent')->references('id')->on('events')->onDelete('restrict');
            $table->foreign('idPlace')->references('id')->on('places')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('helds');
    }
};
