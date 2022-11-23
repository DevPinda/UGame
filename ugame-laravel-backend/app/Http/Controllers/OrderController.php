<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\models\Order;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    //
    function insertform(Request $request){
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        // $fullname = $first_name+" "+$last_name;
        $email = $request->input('email');
        $postcode = $request->input('postcode');
        $purchaseDate = date("d:m:Y");
        $deliveryDate = $request->input('deliveryDate');
        $phoneNumber = $request->input('phoneNumber');
        $homeAddress = $request->input('homeAddress');
        $price = $request->input('price');
        $productId = $request->input('productId');
        $supplierId = $request->input('supplierId');
        $data=array('firstName'=>$first_name,
            "lastName"=>$last_name,
            "purchaseDate"=>$purchaseDate,
            "deliveryDate"=>$deliveryDate,
            "emailAddress"=>$email,
            "phoneNumber"=>$phoneNumber,
            "postCode"=>$postcode,
            "homeAddress"=>$homeAddress,
            "price"=>$price,
            "productId"=>$productId,
            "supplierId"=>$supplierId);
        // $DB = new 
        DB::table('orders')->insert($data);
        // return view('recipts');
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/insert">Click Here</a> to go back.';
        }
}
