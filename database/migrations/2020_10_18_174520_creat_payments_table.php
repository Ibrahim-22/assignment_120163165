<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->string('CheckNum')->unique() ;
            $table->unsignedBigInteger('CustomerID');
            $table->foreign('CustomerID')->references('ID')->on('customers');
            $table->dateTime('PaymentDate');
            $table->double('Amount','19','0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
