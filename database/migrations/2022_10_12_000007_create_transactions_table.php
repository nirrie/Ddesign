<?php
namespace Database\Migrations;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
return new class extends Migration
{

    /**
     * Run the migrations.
     * @table transaction
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('order_id')->constrained('orders');
            $table->string('code', 100);
            $table->smallInteger('type')->default('0');
            $table->smallInteger('mode')->default('0');
            $table->smallInteger('status')->default('0');
            $table->dateTime('createdAt');
            $table->dateTime('updatedAt')->nullable();
            $table->text('content')->nullable();
            $table->timestamps();

            // $table->index(["userId"], 'idx_transaction_user');

            // $table->index(["orderId"], 'idx_transaction_order');


            // $table->foreign('userId', 'idx_transaction_user')
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
        Schema::dropIfExists('transactions');
    }
};
