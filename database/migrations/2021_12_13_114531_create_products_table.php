<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('vendor_id');
            $table->integer('cat_id');
             $table->string('pname');
             $table->string('sku_id');
             $table->string('p_price');
             $table->string('s_price');
             $table->string('tax_type');
             $table->string('tax_ammount');
             $table->longText('short_description');
             $table->longText('long_description');
             $table->enum('discount_type', ['flat_rate', 'percentage']);
             $table->string('discount');
             $table->longText('featured_image');
             $table->longText('gallery_image');
             $table->string('in_stock');
             $table->enum('shipping_type',['paid', 'unpaid'])->default('unpaid');
             $table->string('shipping_charge');
             $table->string('meta_title');
             $table->string('meta_keyword');
             $table->longText('meta_description');
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
        Schema::dropIfExists('products');
    }
}
