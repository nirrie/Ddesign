<?php
namespace Database\Migrations;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
return new class extends Migration
{
    /**
     * Run the migrations.
     * @table order
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->foreignId('user_id')->constrained('users');
            $table->string('sessionId', 100);
            $table->string('token', 100);
            $table->smallInteger('status')->default('0');
            $table->float('subTotal')->default('0');
            $table->float('shipping')->default('0');
            $table->float('total')->default('0');
            $table->float('grandTotal')->default('0');
            $table->string('firstName', 50)->nullable();
            $table->string('lastName', 50)->nullable();
            $table->string('mobile', 15)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('line1', 50)->nullable();
            $table->string('line2', 50)->nullable();
            $table->string('city', 50)->nullable();
            $table->string('province', 50)->nullable();
            $table->string('country', 50)->nullable();
            $table->dateTime('createdAt');
            $table->dateTime('updatedAt')->nullable();
            $table->text('content')->nullable();
            $table->timestamps();

            // $table->index(["userId"], 'idx_order_user');


            // $table->foreign('userId', 'idx_order_user')
            //     ->references('id')->on('user')
            //     ->onDelete('no action')
            //     ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
