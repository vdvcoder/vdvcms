<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponsTable extends Migration
{
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->unique();
            $table->string('type')->nullable();
            $table->integer('value')->nullable();
            $table->integer('percent_off')->nullable();
            $table->string('uuid')->nullable();
            $table->integer('amount')->nullable();
            $table->integer('amount_left')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
