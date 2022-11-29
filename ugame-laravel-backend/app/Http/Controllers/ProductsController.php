<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller {
    public function indexProducts(){
        $indexProducts = DB::select('select * from products');
        return view('index', ['indexProducts'=>$indexProducts]);
    }

    public function playstationProducts(){
        $playstationProducts = DB::select("select * from products WHERE platform LIKE '%PlayStation%' ");
        return view('playstation', ['playstationProducts'=>$playstationProducts]);
    }

    public function xboxProducts(){
        $xboxProducts = DB::select("select * from products WHERE platform LIKE '%Xbox%'");
        return view('xbox', ['xboxProducts'=>$xboxProducts]);
    }

    public function nintendoProducts(){
        $nintendoProducts = DB::select("select * from products WHERE platform LIKE '%Nintendo%'");
        return view('nintendo', ['nintendoProducts'=>$nintendoProducts]);
    }
}