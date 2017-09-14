<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedinteger('vendor_id');
            $table->unsignedinteger('cust_id');
            $table->integer('stall_no');
            $table->string('block_no');
            $table->unsignedinteger('food_item_id');
            $table->integer('quantity');
            $table->unsignedinteger('transaction_id');
            $table->string('payment_status');
            $table->integer('status_id');
            //$table->foreign('')
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
        Schema::dropIfExists('orders');
    }
}
