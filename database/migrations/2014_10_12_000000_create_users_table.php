<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
			
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
			$table->string('study')->nullable();
			$table->integer('year');
			$table->timestamp('birth_date')->nullable();
			$table->string('image')->nullable();
			$table->integer('status');
			$table->timestamp('join_date')->nullable();
			$table->timestamp('leave_date')->nullable();
			$table->text('hobbies')->nullable();
			$table->text('committees')->nullable();
			$table->text('story')->nullable();
			$table->string('phone_home')->nullable();
			$table->string('phone_mobile')->nullable();
			$table->string('type')->default('default');
			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
