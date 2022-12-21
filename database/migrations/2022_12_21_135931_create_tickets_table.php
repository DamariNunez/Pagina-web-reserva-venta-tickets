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
        Schema::create('tickets', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable(false);
            $table->string('description')->nullable(false);
            $table->unsignedBigInteger('idUser')->nullable(false);
            $table->unsignedBigInteger('idEvent')->nullable(false);
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('idEvent')->references('id')->on('events')->onDelete('restrict');
            $table->foreign('idUser')->references('id')->on('users')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
};
