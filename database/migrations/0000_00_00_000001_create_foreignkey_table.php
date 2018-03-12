<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateForeignkeyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('role_id', 'user_role_foreign')
                ->references('id')->on('roles')
                ->onDelete('cascade');
        });

        Schema::table('answers', function (Blueprint $table) {
            $table->foreign('user_id', 'answer_user_foreign')
                ->references('id')->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('user_role_foreign');
        });

        Schema::table('answers', function (Blueprint $table) {
            $table->dropForeign('answer_user_foreign');
        });
    }
}
