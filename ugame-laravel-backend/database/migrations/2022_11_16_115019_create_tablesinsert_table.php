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
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('CustomerID');
            $table->increments('Username');
            $table->increments('EmalAddress');
            $table->increments('PhoneNumber');
            $table->increments('Name');
            $table->increments('PostCode');
            $table->increments('HomeAddress');
            $table->increments('GamesBought');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tablesinsert');
    }
};
