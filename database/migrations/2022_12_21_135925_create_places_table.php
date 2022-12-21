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
        Schema::create('places', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable(false);
            $table->string('namePlace')->nullable(false);
            $table->integer('capacity')->nullable(false);
            $table->string('address')->nullable(false);
            $table->unsignedBigInteger('idCity')->nullable(false);
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('idCity')->references('id')->on('cities')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('places');
    }
};
