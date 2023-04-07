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
            $table->increments('id');
            $table->string('name', 200);
            $table->float('price', 10, 3);
            $table->float('sale_price', 10, 3)->default(0);
            $table->string('image')->nullable();
            $table->text('content')->nullable();
            $table->integer('category_id')->unsigned();
            $table->tinyInteger('status');
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('category2s');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products', function(Blueprint $table){
            $table->dropForeign('products_category_id_foreign');
        });
         Schema::dropIfExists('products');
    }
}
