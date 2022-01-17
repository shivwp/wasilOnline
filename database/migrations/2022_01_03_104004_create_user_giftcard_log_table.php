<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserGiftcardLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_giftcard_log', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('card_id');
            $table->string('gift_card_code');
            $table->integer('gift_card_amount');
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
        Schema::dropIfExists('user_giftcard_log');
    }
}
