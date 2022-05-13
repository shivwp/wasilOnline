<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductBidTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_bid', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->date('start_date');
            $table->date('end_date');
            $table->tinyInteger('min_bid_price');
            $table->tinyInteger('step_price');
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
        Schema::dropIfExists('product_bid');
    }
}
