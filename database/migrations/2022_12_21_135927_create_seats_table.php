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
        Schema::create('seats', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable(false);
            $table->string('row')->unique()->nullable(false);
            $table->integer('seat')->nullable(false);
            $table->unsignedBigInteger('idPlace')->nullable(false);
            $table->softDeletes();
            $table->timestamps();

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
        Schema::dropIfExists('seats');
    }
};
