<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOderdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oderdetails', function (Blueprint $table) {
            $table->integer('oder_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->integer('quantity');
            $table->float('price', 10, 3);
            $table->timestamps();
            $table->primary('oder_id', 'product_id');
            $table->foreign('oder_id')->references('id')->on('oders');
            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
       Schema::create('oderdetails', function (Blueprint $table){
           $table->dropForeign('oder_details_oder_id_foreign');
           $table->dropForeign('oder_details_product_id_foreign');
       });
    {
        Schema::dropIfExists('oderdetails');
    }
}
}
