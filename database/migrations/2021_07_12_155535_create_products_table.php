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
            $table->string('product_name');
            $table->string('part_no');
            $table->string('board_no');
            $table->string('compatible_model');
            $table->integer('product_selling_price');
            $table->integer('product_cost_price');
            $table->integer('product_qty_avail');
            $table->string('product_image1');
            $table->string('currency_unit');
            $table->string('amazon_link');
            $table->string('facebook_link');
            $table->string('kijiji_link');
            $table->text('product_desc');
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
