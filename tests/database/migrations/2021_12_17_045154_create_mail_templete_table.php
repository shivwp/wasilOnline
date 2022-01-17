<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMailTempleteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mail_templete', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('subject');
            $table->enum('msg_category',['placed', 'shipped','packed','cancelled','delivered','out for delivery','out for reach','return','refunded','contact us','forgot password','distributor','password reset','signup']);
            $table->longText('message');
            $table->string('from_email');
            $table->string('reply_email');
            $table->string('mail_to');
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
        Schema::dropIfExists('mail_templete');
    }
}
