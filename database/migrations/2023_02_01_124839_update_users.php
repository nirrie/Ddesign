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
        Schema::table('users', function (Blueprint $table) {
            $table->string('username', 50) ->unique();
            $table->dropColumn(['middleName', 'intro', 'profile', 'line1', 'line2' ]);
            $table->renameColumn('firstName', 'first_name');
            $table->renameColumn('lastName', 'last_name');
            $table->renameColumn('passwordHash', 'password_hash');
            $table->renameColumn('lastLogin', 'last_login');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
