<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->unsignedBigInteger('CustomerID');
            $table->foreign('CustomerID')->references('ID')->on('customers');
            $table->dateTime('OrderDate');
            $table->dateTime('RequiredDate');
            $table->dateTime('ShippedDate');
            $table->integer('Status');
            $table->string('Comments');

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
