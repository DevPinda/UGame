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
                    $table->increments('ProductsID');
                    $table->increments('Name');
                    $table->increments('Downloads');
                    $table->increments('Platform');
                    $table->increments('Genre');
                    $table->increments('ReleaseDate');
                    $table->increments('OperatingSystem');
                    $table->increments('Stock');
                    $table->increments('Orders');
                    $table->increments('Price');
            }

        );}
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_order_details');
    }
 };
