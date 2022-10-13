<?php
namespace Database\Migrations;

use Doctrine\DBAL\Schema\ForeignKeyConstraint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
return new class extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'carts';
    /**
     * Run the migrations.
     * @table carts
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('sessionId', 100);
            $table->string('token', 100);
            $table->smallInteger('status')->default('0');
            $table->string('firstName', 50)->nullable();
            $table->string('middleName', 50)->nullable();
            $table->string('lastName', 50)->nullable();
            $table->string('mobile', 15)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('city', 50)->nullable();
            $table->string('province', 50)->nullable();
            $table->text('content')->nullable();
            $table->timestamps();


            // $table->index(["user_id"]);


            // $table->foreign('userId', 'idx_cart_user')
            //     ->references('id')->on('user')
            //     ->onDelete('no action')
            //     ->onUpdate('no action');
            $table->foreignId('user_id')->constrained('users')->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
};
