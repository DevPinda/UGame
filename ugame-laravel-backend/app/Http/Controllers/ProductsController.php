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

    public function nintendoProducts(){
        $nintendoProducts = DB::select('select * from nintendoProducts WHERE 1');
        return view('nintendo', ['nintendoProducts'=>$nintendoProducts]);
    }

    public function store_checkout(Request $request){
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $email = $request->input('email');
        $postcode = $request->input('postcode');
        $phoneNumber = $request->input('phoneNumber');
        $homeAddress = $request->input('homeAddress');
        $deliveryDate = $request->input('deliveryDate');
        return view('checkout_p');
    }
   

}