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
            $table->id();
            $table->string('firstName', 50)->nullable();
            $table->string('middleName', 50)->nullable();
            $table->string('lastName', 50)->nullable();
            $table->string('mobile', 15)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('passwordHash', 32);
            $table->dateTime('registeredAt');
            $table->dateTime('lastLogin')->nullable();
            $table->text('intro')->nullable();
            $table->text('profile')->nullable();
            $table->string('line1', 50)->nullable();
            $table->string('line2', 50)->nullable();
            $table->unique(["mobile"], 'uq_mobile');
            $table->unique(["email"], 'uq_email');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
