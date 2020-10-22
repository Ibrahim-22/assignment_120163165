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
            $table->bigIncrements('Code');
            $table->unsignedBigInteger('ProductLineID');
            $table->foreign('ProductLineID')->references('ID')->on('product_lines');
            $table->string('Name');
            $table->integer('Scale');
            $table->string('vendor');
            $table->string('PdtDescription');
            $table->integer('QtyInStock');
            $table->double('BuyPrice','19','0');
            $table->string('MSRP');
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
