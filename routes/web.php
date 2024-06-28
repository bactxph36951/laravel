<?php

use App\Http\Controllers\SVController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

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

Route::get('test', function () {
    echo "123";
});

Route::get('/', function () {
    echo "Trang chủ";
});

Route::get('list-products', [ProductController::class, 'showProduct']);

// truuyeefn dữ liệu từ route sang controller
//slug: http://127.0.0.1:8000/get-product/3/iphone17

Route::get("get-product/{id}/{name?}", [ProductController::class, 'getProduct']);

//Params: http://127.0.0.1:8000/get-product?id=3&name=iphone
Route::get("update-product", [ProductController::class, 'updateProduct']);


Route::get('thongtinsv', [SVController::class, 'showSV']);