<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderUserPivotTable extends Migration
{
    public function up()
    {
        Schema::create('order_user', function (Blueprint $table) {
            $table->unsignedInteger('user_id');
            $table->foreign('user_id', 'user_id_fk_2023187')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedInteger('order_id');
            $table->foreign('order_id', 'order_id_fk_2023187')->references('id')->on('orders')->onDelete('cascade');
        });
    }
}
