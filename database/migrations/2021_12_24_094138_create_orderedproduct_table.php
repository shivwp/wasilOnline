<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderedproductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderedproduct', function (Blueprint $table) {
            $table->id();
            $table->string('product_id');
            $table->string('order_id');
            $table->string('p_name');
            $table->string('p_price');
            $table->string('tax');
            $table->string('shipping_charge');
            $table->string('country');
            $table->string('short_description');
            $table->integer('long_description');
            $table->string('featured_image');
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
        Schema::dropIfExists('orderedproduct');
    }
}
