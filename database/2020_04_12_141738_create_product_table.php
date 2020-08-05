<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->Id();
            $table->string('title')->nullable();
            $table->string('disc')->nullable();
            $table->string('price')->nullable();
            $table->string('pimage')->nullable();
            $table->integer('count')->nullable();
            $table->unsignedBigInteger('catid');
            $table->foreign('catid')
                ->  references('id')->on('category')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
