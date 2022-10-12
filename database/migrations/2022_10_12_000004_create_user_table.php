<?php
namespace Database\Migrations;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateUserTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'user';
    /**
     * Run the migrations.
     * @table user
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('firstName', 50)->nullable()->default(null);
            $table->string('middleName', 50)->nullable()->default(null);
            $table->string('lastName', 50)->nullable()->default(null);
            $table->string('mobile', 15)->nullable()->default(null);
            $table->string('email', 50)->nullable()->default(null);
            $table->string('passwordHash', 32);
            $table->dateTime('registeredAt');
            $table->dateTime('lastLogin')->nullable()->default(null);
            $table->text('intro')->nullable()->default(null);
            $table->text('profile')->nullable()->default(null);
            $table->string('line1', 50)->nullable()->default(null);
            $table->string('line2', 50)->nullable()->default(null);

            $table->unique(["mobile"], 'uq_mobile');

            $table->unique(["email"], 'uq_email');
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
