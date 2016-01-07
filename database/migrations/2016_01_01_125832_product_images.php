<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_images', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('product_id')->unsigned()->default(0);
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->string('extension', 5);
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
        \Illuminate\Support\Facades\Schema::drop('product_images');
    }
}