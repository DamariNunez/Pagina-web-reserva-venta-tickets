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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable(false);
            $table->string('username')->nullable(false);;
            $table->string('lastname')->nullable(false);;
            $table->string('email')->unique()->nullable(false);;
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable(false);;
            $table->string('phone')->nullable(false);;
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
