<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Customers;

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
        // $email = request('email');
        $customer = Customers::where('emailAddress', request('email'))->get();
        $_SESSION['customer']= $customer;
        $type = $_SESSION['customer'];
        if ($type == 'admin'){
            return view('index',['type' => $type]);
        }
        else{
            return view('signin');
        }
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



    
    function order_create_table($name){
        return view();
    }
}
?>