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
        Schema::create('transaction', function (Blueprint $table) {
            $table->id();
            $table->uuid('transactionNumber');
            $table->string('buktiPembayaran');
            $table->unsignedBigInteger('cartId');
            $table->unsignedBigInteger('userId');
            $table->unsignedBigInteger('statusId');
            $table->unsignedBigInteger('deliveryId');
            $table->unsignedBigInteger('paymentId');
            $table->unsignedBigInteger('addressId');
            $table->timestamps();

            $table->foreign('cartId')->references('id')->on('cart')->onDelete('cascade');
            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('statusId')->references('id')->on('status')->onDelete('cascade');
            $table->foreign('deliveryId')->references('id')->on('delivery')->onDelete('cascade');
            $table->foreign('paymentId')->references('id')->on('payment')->onDelete('cascade');
            $table->foreign('addressId')->references('id')->on('address')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction');
    }
};
