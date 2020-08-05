<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('fullname')->nullable();
            $table->string('nationalcode')->nullable();
            $table->enum('role',array('User','employee','seller','Admin'))->default('User');
            $table->enum('status',array('active','pending','suspended','delete'))->default('pending');
            $table->string('phone')->nullable();
            $table->string('mobile');
            $table->string('password');
            $table->string('city')->nullable();
            $table->string('birthday')->nullable();
            $table->boolean('gender')->nullable();

            $table->string('email')->unique();
            $table->integer('wallet')->nullable();
            $table->string('api_token')->nullable();
            $table->timestamp('email_verified_at')->nullable();



            $table->rememberToken();
            $table->timestamps();
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
