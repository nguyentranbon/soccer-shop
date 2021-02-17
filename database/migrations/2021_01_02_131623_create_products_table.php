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
            $table->string('user_id');
            $table->string('product_name');
            $table->string('product_overview');
            $table->string('product_description');
            $table->string('product_image');
            $table->string('product_images');
            $table->string('product_price_root');
            $table->string('product_price');
            $table->string('product_price_sale');
            $table->string('category_id');
            $table->string('cache_comments');
            $table->string('cache_other_products');
            $table->string('product_status');
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
