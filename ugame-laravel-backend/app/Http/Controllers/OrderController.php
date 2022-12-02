<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\models\Order;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Orders;

class OrderController extends Controller
{
    //
    function insertform(Request $request){
        $date= new \DateTime('NOW');
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        // $fullname = $first_name+" "+$last_name;
        $email = $request->input('email');
        $postcode = $request->input('postcode');
        $purchaseDate = date('Y-m-d H:i:s');
        if ($request->input('deliveryDate') == '+1 day'){
            $deliveryDate = $date->modify('+1 day');
        } elseif ($request->input('deliveryDate') == '+3 day'){
            $deliveryDate = $date->modify('+3 day');
        } else {
            $deliveryDate = $date->modify('+5 day');
        }
        
        $phoneNumber = $request->input('phoneNumber');
        $homeAddress = $request->input('homeAddress');
        $price = $request->input('price');
        $productId = '1';
        $supplierId = '1';
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
        $order = Order::where('firstName','=',$first_name)->get();
        // return view('recipts');
        echo "Record inserted successfully.<br/>";
        
        foreach ($order as $ord){
            echo 'Your order number is #',$ord->orderId,'<br/>';
            echo 'Expected delivery date ',$ord->deliveryDate;
            echo '<br/>';
        }
        echo '<a href = "/">Click Here</a> to go back.<br/>';
        }

        function past_orders()
        {
            $order = Order::all();
            return view('pastOrder', ['orders'=>$order]);
        }
}
