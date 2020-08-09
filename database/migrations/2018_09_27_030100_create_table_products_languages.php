<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProductsLanguages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_languages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_product_id');
            $table->integer('products_id');
            $table->integer('languages_id');
            $table->string('name')->nullable();
            $table->string('image');
            $table->text('content')->nullable();
            $table->integer('status'); // Còn hàng, hết hàng
            $table->integer('display_top');
            $table->integer('view')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('products_languages');
    }
}
