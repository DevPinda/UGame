<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use DB;
use App\Models\Customers;
use App\Models\Products;
use App\Models\User;
use App\Models\Order;

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
        $developer = $request->input('developer');
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
            'rating'=>$rating,
            'developer'=>$developer
        );
        Products::insert($data);
        echo '<script>alert("Game added successfully")</script>';
        return view('newItems');
    }

    public function get_customers()
    {
        $currentDate = new \DateTime('NOW');
        
        $userList = User::all();
        $orders = Order::whereDate('deliveryDate', '>=', $currentDate->format('Y-m-d H:i:s'))
            ->get();
        $products = Products::where('productsID', '>=', 0)
            ->get();

        return view('admin', ['userlist'=>$userList, 'orders'=>$orders, 'products'=>$products]);
    }

    public function get_stock()
    {

    }
}
