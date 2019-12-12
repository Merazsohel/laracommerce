<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('title');
            $table->integer('category_id')->unsigned()->nullable();
            $table->integer('subcategory_id')->unsigned()->nullable();
            $table->integer('child_category')->unsigned()->nullable();
            $table->integer('supplier_id')->unsigned()->nullable();
            $table->integer('brand_id')->unsigned()->nullable();
            $table->text('description');
            $table->text('keypoint');
            $table->float('supplierprice');
            $table->float('price');
            $table->string('pcode');
            $table->string('created_by');

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
