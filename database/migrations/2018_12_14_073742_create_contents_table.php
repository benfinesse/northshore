<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            //for dynamic menus e.g about, banner [type: banner,menu]
            $table->increments('id');
            $table->string('type')->nullable();//banner|menu
            $table->string('logo1')->nullable();//if has img
            $table->string('logo2')->nullable();//if has img2
            $table->string('title')->nullable();//if has title
            $table->string('group')->nullable();//e.g home|[name]
            $table->text('detail1')->nullable();//if has details
            $table->text('detail2')->nullable();//if has details
            $table->string('btn')->nullable();//if has btn[btn-text]
            $table->text('target')->nullable();//btn-anchor
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
        Schema::dropIfExists('contents');
    }
}
