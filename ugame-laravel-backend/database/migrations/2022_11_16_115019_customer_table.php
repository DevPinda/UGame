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
            $table->increments('customerID');
            $table->string('username');
            $table->string('emailAddress');
            $table->string('phoneNumber');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('postCode');
            $table->string('homeAddress');
            $table->integer('gamesBought');
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
