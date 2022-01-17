<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CurrencyConversionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('currency_conversion', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code');
            $table->string('country_name');
            $table->string('country_code');
            $table->string('compare_by');
            $table->string('compare_rate');
            $table->integer('status');
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
        //
    }
}
