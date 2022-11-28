<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xboxProducts', function (Blueprint $table) {
            $table->increments('productsID');
            $table->string('title');
            $table->string('platform');
            $table->string('genre');
            $table->float('price');
            $table->integer('rating');
        }
    );}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('playstationProducts');
    }
};
