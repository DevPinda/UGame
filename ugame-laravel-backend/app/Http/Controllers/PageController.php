<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    function pastOrders()
    {
        return view ('pastOrder');
    }

    
    function order_create_table($name){
        return view();
    }
}
?>