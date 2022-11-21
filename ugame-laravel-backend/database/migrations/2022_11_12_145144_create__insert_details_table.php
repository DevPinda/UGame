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
                    $table->string('Name');
                    $table->integer ('Downloads');
                    $table->string('Platform');
                    $table->string('Genre');
                    $table->datetime('ReleaseDate');
                    $table->string('OperatingSystem');
                    $table->text('Stock');
                    $table->text('Orders');
                    $table->decimal('Price');
                
                    
            }

        );
    }
    

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
