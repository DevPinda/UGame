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
                    $table->integer('downloads');
                    $table->string('platform');
                    $table->string('genre');
                    $table->date('releaseDate');
                    $table->string('publisher');
                    $table->integer('stock');
                    $table->integer('orders');
                    $table->integer('players');
                    $table->float('price');
                    $table->integer('rating')
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
