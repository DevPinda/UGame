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
                    $table->string('firstName');
                    $table->string('lastName');
                    $table->integer('Downloads');
                    $table->string('Platform');
                    $table->string('Genre');
                    $table->date('ReleaseDate');
                    $table->string('OperatingSystem');
                    $table->integer('Stock');
                    $table->integer('Orders');
                    $table->float('Price');
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
