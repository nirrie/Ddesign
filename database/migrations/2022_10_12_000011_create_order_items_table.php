<?php

namespace Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @table order_item
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            // $table->bigInteger('productId');
            // $table->bigInteger('orderId');
            $table->foreignId('product_id')->constrained('products');
            $table->foreignId('order_id')->constrained('orders');
            $table->string('sku', 100);
            $table->float('price')->default('0');
            $table->smallInteger('quantity')->default('0');
            $table->dateTime('createdAt');
            $table->dateTime('updatedAt')->nullable();
            $table->text('content')->nullable();
            $table->timestamps();

            // $table->index(["productId"], 'idx_order_item_product');

            // $table->index(["orderId"], 'idx_order_item_order');

            // $table->foreign('orderId', 'idx_order_item_order')
            //     ->references('id')->on('order')
            //     ->onDelete('no action')
            //     ->onUpdate('no action');

            // $table->foreign('productId', 'idx_order_item_product')
            //     ->references('id')->on('product')
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
        Schema::dropIfExists('order_items');
    }
};
