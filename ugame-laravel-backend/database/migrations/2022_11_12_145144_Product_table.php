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
        Schema::create('products', function (Blueprint $table) {
            $table->increments('productsID');
            $table->string('title');
            $table->string('platform');
            $table->string('genre');
            $table->float('price');
            $table->integer('rating');
            $table->string('stock');
            $table->date('releaseDate');
            $table->string('publisher');
            $table->integer('downloads');
            $table->integer('orders');
            $table->string('developer');
        }
    );}
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
 };
