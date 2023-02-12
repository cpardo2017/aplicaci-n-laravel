<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_images', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('videogame_id')->unsigned();
            $table->string('path');
            $table->timestamps();
            
            $table->foreign('videogame_id')->references('id')->on('videogames');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('front_pages');
    }
}
