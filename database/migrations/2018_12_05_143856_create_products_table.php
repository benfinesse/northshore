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
            $table->string('unid')->nullable()->unique();
            $table->string('name')->nullable();
            $table->float('price')->nullable();
            $table->boolean('isnew')->nullable();
            $table->string('oldprice')->nullable();
            $table->string('category_id')->nullable();
            $table->string('partner_id')->nullable();
            $table->boolean('active')->nullable();
            $table->text('pic1')->nullable();
            $table->text('pic2')->nullable();
            $table->text('pic3')->nullable();
            $table->boolean('featured')->nullable();
            $table->text('detail')->nullable();
            $table->string('discount')->nullable();
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
        Schema::dropIfExists('products');
    }
}
