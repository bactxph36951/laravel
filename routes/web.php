<?php

use App\Http\Controllers\SVController;
use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\AuthenController;
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

// Route::get('list-products', [ProductController::class, 'showProduct']);

// // truuyeefn dữ liệu từ route sang controller
// //slug: http://127.0.0.1:8000/get-product/3/iphone17

// Route::get("get-product/{id}/{name?}", [ProductController::class, 'getProduct']);

// //Params: http://127.0.0.1:8000/get-product?id=3&name=iphone
// Route::get("update-product", [ProductController::class, 'updateProduct']);

// Route::get('thongtinsv', [SVController::class, 'showSV']);
// Route::get('query-builder', [ProductController::class, 'queryBuilder']);

//CRUD bảng users
Route::group(['prefix' => 'users', 'as' => 'users.'], function() {
    Route::get('list-users', [UserController::class, 'listUsers'])->name('listUsers');
    Route::get('add-users', [UserController::class, 'addUsers'])->name('addUsers');
    Route::post('add-users', [UserController::class, 'add'])->name('add');
    Route::delete('delete-users/{idUser}', [UserController::class, 'deleteUsers'])->name('deleteUsers');
    Route::get('update-users/{idUser}', [UserController::class, 'updateUsers'])->name('updateUsers');
    Route::post('update-users', [UserController::class, 'update'])->name('update');
});

Route::group(['prefix' => 'product', 'as' => 'product.'], function() {
    Route::get('list-product', [ProductController::class, 'listProduct'])->name('listProduct');
    Route::get('add-product', [ProductController::class, 'addProduct'])->name('addProduct');
    Route::post('add-product', [ProductController::class, 'addPostProduct'])->name('addPostProduct');
    Route::get('delete-product/{idPro}', [ProductController::class, 'deleteProduct'])->name('deleteProduct');
    Route::get('update-product/{idPro}', [ProductController::class, 'updateProduct'])->name('updateProduct');
    Route::post('update-product', [ProductController::class, 'updatePostProduct'])->name('updatePostProduct');

});

Route::group(['prefix' => 'admin', 'as' => 'admin.', "middleware" => "checkAdmin"], function() {
    Route::group([
        'prefix' => 'products',
        'as' => 'products.'
    ], function(){
        Route::get('/', [ProductController::class, 'listProducts'])->name('listProducts');
        Route::get('/add-product', [ProductController::class, 'addProducts'])->name('addProducts');
        Route::post('/add-product', [ProductController::class, 'addPostProduct'])->name('addPostProduct');
        Route::get('/{id}', [ProductController::class, 'destroy'])->name('destroy');
        Route::get('/{id}/edit', [ProductController::class, 'update'])->name('update');
        Route::put('/{id}', [ProductController::class, 'updatePostProduct'])->name('updatePostProduct');
    });

});

Route::get("login", [AuthenController::class, "login"])->name("login");
Route::post("login", [AuthenController::class, "postLogin"])->name("postLogin");
Route::get("logout", [AuthenController::class, "logout"])->name("logout");
Route::get("register", [AuthenController::class, "register"])->name("register");
Route::post("register", [AuthenController::class, "postRegister"])->name("postRegister");

