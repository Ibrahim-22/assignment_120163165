<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatOrderProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_products', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->unsignedBigInteger('OrderID');
            $table->unsignedBigInteger('ProductCode');
            $table->foreign('OrderID')->references('ID')->on('orders');
            $table->foreign('ProductCode')->references('Code')->on('products');
            $table->integer('Qty');
            $table->double('PriceEach','19','0');
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
