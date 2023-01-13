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
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable(false);
            $table->string('name')->nullable(false);
            $table->string('duration')->nullable(false);
            $table->float('value')->nullable(false);
            $table->string('description')->nullable(false);
            $table->unsignedBigInteger('idCategory')->nullable(false);
            $table->unsignedBigInteger('idAudience')->nullable(false);
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('idCategory')->references('id')->on('categories')->onDelete('restrict');
            $table->foreign('idAudience')->references('id')->on('audiences')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
};
