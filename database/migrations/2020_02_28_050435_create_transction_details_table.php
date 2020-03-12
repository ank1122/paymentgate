<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransctionDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transction_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('orderId');
            $table->string('orderAmount');
            $table->string('refrenceId');
            $table->string('txStatus');
            $table->string('paymentMode');
            $table->string('txTime');
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
        Schema::dropIfExists('transction_details');
    }
}
