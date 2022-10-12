<?php
namespace Database\Migrations;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateProductTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'product';
    /**
     * Run the migrations.
     * @table product
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->bigInteger('userId');
            $table->string('title', 75);
            $table->text('summary')->nullable()->default(null);
            $table->smallInteger('type')->default('0');
            $table->string('sku', 100);
            $table->float('price')->default('0');
            $table->smallInteger('quantity')->default('0');
            $table->tinyInteger('shop')->default('0');
            $table->dateTime('createdAt');
            $table->dateTime('updatedAt')->nullable()->default(null);
            $table->dateTime('publishedAt')->nullable()->default(null);
            $table->dateTime('startsAt')->nullable()->default(null);
            $table->dateTime('endsAt')->nullable()->default(null);
            $table->text('content')->nullable()->default(null);

            $table->index(["userId"], 'idx_product_user');


            $table->foreign('userId', 'idx_product_user')
                ->references('id')->on('user')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tableName);
    }
}
