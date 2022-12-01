<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PageController::class,'index']);
Route::get('/', [ProductsController::class,'indexProducts']);
Route::post('/store_checkout', [OrderController::class,'insertform']);

Route::get('/index', [PageController::class,'index']);
Route::get('/index', [ProductsController::class,'indexProducts']);

Route::get('/nintendo', [PageController::class,'nintendo']);
Route::get('/nintendo', [ProductsController::class,'nintendoProducts']);

Route::get('/basket', [PageController::class,'basket']);

Route::get('/xbox', [PageController::class,'xbox']);
Route::get('/xbox', [ProductsController::class,'xboxProducts']);

Route::get('/playstation', [PageController::class,'playstation']);
Route::get('/playstation', [ProductsController::class,'playstationProducts']);



Route::get('/deals', [PageController::class,'deals']);
Route::get('/admin', [UserController::class,'get_customers']);
Route::get('/checkout_p', [PageController::class, 'checkout_p']);
Route::get('/checkout', [OrderController::class, 'insertForm']);


Route::post('/store', [UserController::class,'store_products']);

Route::get('/about', [PageController::class,'about']);

Route::get('/contact', [PageController::class,'contact']);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
