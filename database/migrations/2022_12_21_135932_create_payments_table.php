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
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable(false);
            $table->float('totalCost')->nullable(false);
            $table->unsignedBigInteger('idTicket')->nullable(false);
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('idTicket')->references('id')->on('tickets')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
};
