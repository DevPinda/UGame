<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller {
    public function indexProducts(){
        $indexProducts = DB::select('select * from products WHERE 1');
        return view('index', ['indexProducts'=>$indexProducts]);
    }

    public function playstationProducts(){
        $playstationProducts = DB::select('select * from playstationProducts WHERE 1');
        return view('playstation', ['playstationProducts'=>$playstationProducts]);
    }

    public function xboxProducts(){
        $xboxProducts = DB::select('select * from xboxProducts WHERE 1');
        return view('xbox', ['xboxProducts'=>$xboxProducts]);
    }
}