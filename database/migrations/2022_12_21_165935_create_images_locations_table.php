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
        Schema::create('image_locations', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable(false);
            $table->longblob('img')->nullable(false);
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
        Schema::dropIfExists('image_locations');
    }
};
