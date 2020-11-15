<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMidtransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('midtrans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('status_code');
            $table->string('transaction_id');
            $table->string('order_id');
            $table->integer('gross_amount');
            $table->string('payment_type');
            $table->timestamp('transaction_time');
            $table->string('transaction_status');
            $table->string('fraud_status');
            $table->string('finish_redirect_url');   
             
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
