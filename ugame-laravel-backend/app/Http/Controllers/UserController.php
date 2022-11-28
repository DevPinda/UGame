<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use DB;
use App\Models\Customers;
use App\Models\Products;

class UserController extends Controller
{
    // Handles all customer and user accounts

    public function checkStatus($email)
    {
         $users = DB::table('customers')
             ->all()
             ->get();
        return view('test');
    }

    public function all()
    {
        $users = DB::table('customers')->get();
 
        foreach ($users as $user)
        {
            return view("xbox");
        }
    }

    public function admin()
    {
        return view('admin');
    }


    // stores new 
    public function store_products(Request $request)
    {
        $date = date('d-m-y h:i:s');
        $title = $request->input('title');
        // $downloads = $request->input();
        $platform = $request->input('platform');
        $genre = $request->input('genre');
        $releaseDate = $request->input('releaseDate');
        $publisher = $request->input('publisher');
        $stock = $request->input('stock');
        //$orders = $request->input();
        //$players = $request->input('players');
        $price = $request->input('price');
        $rating = $request->input('rating');
        $data=array(
            'title'=>$title,
            'downloads'=>0,
            'platform'=>$platform,
            'genre'=>$genre,
            'releaseDate'=>$releaseDate,
            'publisher'=>$publisher,
            'stock'=>$stock,
            'orders'=>0,
            'price'=>$price,
            'rating'=>$rating
        );
        Products::insert($data);
        echo '<script>alert("Game added successfully")</script>';
        return view('admin');
    }
}
