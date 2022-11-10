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
        return view('nintendo');
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
}
?>