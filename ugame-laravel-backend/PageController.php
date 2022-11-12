<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller {
    function index() {
        return view('index');
    }

    function nintendo(){
        return view('nintendo');
    }

    function playstation(){
        return view('playstation');
    }

    function xbox(){
        return view('xbox');
    }

    function register(){
        return view('register');
    }

    function signin(){
        return view('signin');
    }

    function deals(){
        return view('deals');
    }

    function basket(){
        return view('basket');
    }

    function insertform(){
        return view('ord_create');
        }

    function order_insert(Request $request){
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $fullname = $first_name+" "+$last_name;
        $city_name = $request->input('city_name');
        $email = $request->input('email');
        $postcode = $request->input('postcode');
        $purchaseDate = date("d:m:Y");
        $deliveryDate = $request->input('deliveryDate');
        $phoneNumber = $request->input('phoneNumber');
        $homeAddress = $request->input('homeAddress');
        $price = $request->input('price');
        $productId = $request->input('productId');
        $supplierId = $request->input('supplierId');
        $data=array('Full_name'=>$fullname,"Purchase_Date"=>$purchaseDate,
        "Delivery_Date"=>$deliveryDate,"Email_Address"=>$email,"Phone_number"=>$phoneNumber,
        "Post_Code"=>$postcode, "Home_Address"=>$homeAddress, "Price"=>$price,
        "Product_Id"=>$productId, "Supplier_Id"=>$supplierId);
        DB::table('orders')->insert($data);
        // return view('recipts');
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/insert">Click Here</a> to go back.';
        }

    function order_create_table($name){
        Schema::create('orders', function($table){
            $table->increments('orderId');
            $table->datetime('Purchase_Date');
            $table->datetime('Delivery_Date');
            $table->string('Email_Address');
            $table->string('Phone_number');
            $table->string('Full_name');
            $table->text('Post_Code');
            $table->foreign('Post_code')->references('Post_code')->on('Customer');
            $table->text('Home_Address');
            $table->foreign('Home_Address')->references('Home_Address')->on('Customer');
            $table->decimal('Price');
            $table->string('Product_Id');
            $table->foreign('Product_Id')->references('Product_Id')->on('Product');
            $table->string('Supplier_Id');
            $table->foreign('Supplier_Id')->references('Supplier_Id')->on('Product');
        });
    }
    
}
?>