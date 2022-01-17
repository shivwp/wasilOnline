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
            $table->integer('order_id');
            $table->integer('user_id');
            $table->enum('status', ['new','in process','shipped','packed','refunded','cancelled','delivered','out for delivery','return','out for reach','ready to ship']);
            $table->string('status_note');
            $table->string('invoice_number');
            $table->string('total_price');
            $table->string('currency_sign');
            $table->string('giftcard_used_amount');
            $table->string('shipping_address_id');
            $table->string('shipping_type');
            $table->string('shipping_method');
            $table->string('shipping_price');
            $table->string('payment_mode');
            $table->string('payment_status');
            $table->string('receipt_amount');
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
