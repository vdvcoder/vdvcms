<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uuid')->nullable();
            $table->string('reference')->nullable();
            $table->integer('customer_data')->nullable();
            $table->integer('shipping_typeid')->nullable();
            $table->float('shipping_price', 15, 2)->nullable();
            $table->string('payment_method')->nullable();
            $table->string('payment')->nullable();
            $table->string('pait_at')->nullable();
            $table->string('paid')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
