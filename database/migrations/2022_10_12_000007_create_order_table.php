<?php
namespace Database\Migrations;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateOrderTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'order';
    /**
     * Run the migrations.
     * @table order
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->bigInteger('userId')->nullable()->default(null);
            $table->string('sessionId', 100);
            $table->string('token', 100);
            $table->smallInteger('status')->default('0');
            $table->float('subTotal')->default('0');
            $table->float('shipping')->default('0');
            $table->float('total')->default('0');
            $table->float('grandTotal')->default('0');
            $table->string('firstName', 50)->nullable()->default(null);
            $table->string('lastName', 50)->nullable()->default(null);
            $table->string('mobile', 15)->nullable()->default(null);
            $table->string('email', 50)->nullable()->default(null);
            $table->string('line1', 50)->nullable()->default(null);
            $table->string('line2', 50)->nullable()->default(null);
            $table->string('city', 50)->nullable()->default(null);
            $table->string('province', 50)->nullable()->default(null);
            $table->string('country', 50)->nullable()->default(null);
            $table->dateTime('createdAt');
            $table->dateTime('updatedAt')->nullable()->default(null);
            $table->text('content')->nullable()->default(null);

            $table->index(["userId"], 'idx_order_user');


            $table->foreign('userId', 'idx_order_user')
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
