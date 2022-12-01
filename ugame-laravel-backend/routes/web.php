<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/index', [PageController::class,'index']);

Route::get('/nintendo', [PageController::class,'nintendo']);

Route::get('/basket', [PageController::class,'basket']);

Route::get('/xbox', [PageController::class,'xbox']);

Route::get('/playstation', [PageController::class,'playstation']);

Route::get('/signin', [PageController::class,'signin']);

Route::get('/deals', [PageController::class,'deals']);

Route::get('/register', [PageController::class,'register']);

Route::get('/order', [PageController::class, 'insertform']);

Route::post('/order_create', [OrderController::class, 'order_create']);

Route::post('/order_table_Create', [PageController:: class, 'order_create_table']);

Route::get('/pastOrder', [PageController::class,'pastOrders']);