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
        Schema::create('bills', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable(false);
            $table->date('date')->nullable(false);
            $table->float('totalValue')->nullable(false);
            $table->unsignedBigInteger('idPayment')->nullable(false);
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('idPayment')->references('id')->on('payments')->onDelete('restrict');
        });  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bills');
    }
};
