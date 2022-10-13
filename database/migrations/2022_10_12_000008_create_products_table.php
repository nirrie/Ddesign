<?php
namespace Database\Migrations;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


return new class extends Migration
{
    /**
     * Run the migrations.
     * @table product
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->foreignId('user_id')->constrained('users');
            // $table->bigInteger('userId');
            $table->string('title', 75);
            $table->text('summary')->nullable();
            $table->smallInteger('type')->default('0');
            $table->string('sku', 100);
            $table->float('price')->default('0');
            $table->smallInteger('quantity')->default('0');
            $table->tinyInteger('shop')->default('0');
            $table->dateTime('createdAt');
            $table->dateTime('updatedAt')->nullable();
            $table->dateTime('publishedAt')->nullable();
            $table->dateTime('startsAt')->nullable();
            $table->dateTime('endsAt')->nullable();
            $table->text('content')->nullable();
            $table->timestamps();

            // $table->index(["userId"], 'idx_product_user');


            // $table->foreign('userId', 'idx_product_user')
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
        Schema::dropIfExists('products');
    }
};
