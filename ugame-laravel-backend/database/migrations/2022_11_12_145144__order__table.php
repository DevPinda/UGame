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
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('orderId');
            $table->datetime('purchaseDate');
            $table->datetime('deliveryDate');
            $table->string('emailAddress');
            $table->string('phoneNumber');
            $table->string('firstName');
            $table->string('lastName');
            $table->text('postCode');
            $table->text('homeAddress');
            $table->decimal('price');
            $table->string('productId');
            $table->string('supplierId');
            if (Schema::hasTable('customerTable')){
                $table->foreign('postcode')->references('Post_code')->on('Customer');
                $table->foreign('postcode')->references('Post_code')->on('Customer');
                $table->foreign('homeAddress')->references('Home_Address')->on('Customer');

            }
            if (Schema::hasTable('Product')){
                $table->foreign('productId')->references('Product_Id')->on('Product');
                $table->foreign('supplierId')->references('Supplier_Id')->on('Product');
            }

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
