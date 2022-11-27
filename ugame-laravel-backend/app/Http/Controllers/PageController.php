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
        return view('signin');
    }
    
    function deals(){
        return view('deals');
    }

    function basket(){
        return view('basket');
    }

    function about(){
        return view('about');
    }

    function contact(){
        return view('contact');
    }

    function insertform(){
        return view('ord_create');
    }

    function order_create_table($name){
        return view();
    }
}
?>