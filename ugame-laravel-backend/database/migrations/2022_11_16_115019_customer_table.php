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
            $table->string('Username');
            $table->string('EmalAddress');
            $table->string('PhoneNumber');
            $table->string('Name');
            $table->text('PostCode');
            $table->text('HomeAddress');
            $table->integer('GamesBought');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
};
