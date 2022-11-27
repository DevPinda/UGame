<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller {
    public function show(){
        $products = DB::select('select * from products WHERE 1');
        return view('index', ['products'=>$products]);
    }
}