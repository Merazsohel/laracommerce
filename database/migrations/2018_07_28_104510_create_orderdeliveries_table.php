<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderdeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderdeliveries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id')->unsinged()->nullable();
            $table->integer('delivery_id')->unsinged()->nullable();
            $table->float('delivery_charge');
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
        Schema::dropIfExists('orderdeliveries');
    }
}
