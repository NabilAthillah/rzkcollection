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
        Schema::create('variant', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('productId');
            $table->unsignedBigInteger('colorId');
            $table->unsignedBigInteger('sizeId');
            $table->unsignedBigInteger('stockId');
            $table->timestamps();

            $table->foreign('productId')->references('id')->on('product')->onDelete('cascade');
            $table->foreign('colorId')->references('id')->on('color')->onDelete('cascade');
            $table->foreign('sizeId')->references('id')->on('size')->onDelete('cascade');
            $table->foreign('stockId')->references('id')->on('stock')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('variant');
    }
};
