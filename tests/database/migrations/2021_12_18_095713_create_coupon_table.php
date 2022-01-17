<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupon', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->longText('description');
            $table->text('discount_type');
            $table->integer('coupon_amount');
            $table->tinyInteger('allow_free_shipping')->length(4);
            $table->date('start_date');
            $table->date('expiry_date');
            $table->integer('minimum_spend');
            $table->integer('maximum_spend');
            $table->tinyInteger('is_indivisual')->length(4);
            $table->tinyInteger('exclude_sale_item')->length(4);
            $table->integer('limit_per_coupon');
            $table->integer('limit_per_user');
            $table->tinyInteger('status')->length(1);
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
        Schema::dropIfExists('coupon');
    }
}
