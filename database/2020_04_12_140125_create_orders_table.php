<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('address_id');
            $table->unsignedBigInteger('status_id');
            $table->string('CodeOrder')->nullable();
            $table->string('post_type')->nullable();
            $table->string('price')->nullable();
            $table->string('cart')->nullable();
            $table->string('RefId');
            $table->string('discount')->nullable();
            $table->string('codeOff')->nullable();
            $table->string('timereg')->nullable();
            $table->string('datereg')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
