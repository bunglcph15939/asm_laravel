<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TrackingController;
use App\Http\Controllers\CommentController;
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


Route::prefix('/store')->name('store.')->group(function(){
    Route::get('/',[ProductController::class,'hien_index'])->name('hien');
    Route::get('/category', [ProductController::class,'hien'])->name('category');
    Route::get('/cart', function () {
        return view('cuahang.cart');
    })->name('cart');
    Route::get('/register', function () {
        return view('cuahang.register');
    })->name('register');
    Route::get('/checkout', function () {
        return view('cuahang.checkout');
    })->name('checkout');
    Route::get('/contact', function () {
        return view('cuahang.contact');
    })->name('contact');
    Route::get('/product_detail/{id?}',[ProductController::class,'detail'])->name('product_detail');
    Route::get('/danh_muc/{id}',[CategoryController::class,'hien'])->name('hien_danhmuc');
    Route::get('/loc_size/{size}',[ProductController::class,'loc_size'])->name('loc_size');
    Route::post('/comment/{id}',[CommentController::class,'comment'])->name('comment');

  Route::prefix('/tracking')->name('tracking.')->group(function(){
        Route::get('/',[TrackingController::class,'index'])->name('index');
        Route::get('/check',[TrackingController::class,'check'])->name('check');
    });
});
Route::middleware('guest')->prefix('/dangnhap')->name('dangnhap.')->group(function(){
    Route::get('/getlogin',[LoginController::class,'index'])->name('getlogin');
    Route::post('/postlogin',[LoginController::class,'login'])->name('postlogin');
    Route::get('/register',[LoginController::class,'register'])->name('register');
    Route::post('/register',[UserController::class,'create'])->name('register');
});
Route::middleware(['auth','checkrole'])->prefix('/admin')->name('admin.')->group(function(){
    // Route::get('/',[LoginController::class,'index'])->name('index');
    Route::get('/', function () {
        return view('layout_admin.main');
    })->name('index');
    Route::get('/category',[CategoryController::class,'index'])->name('category');
    Route::get('/add_category',[CategoryController::class,'create'])->name('add_category');
    Route::put('/add_category/{id?}',[CategoryController::class,'update'])->name('add_category');
    Route::post('/add_category',[CategoryController::class,'store'])->name('addNew_cat');
    Route::delete('/xoa_cat/{category}',[CategoryController::class,'destroy'])->name('xoa_cat');
    Route::get('/sua_cat/{category}',[CategoryController::class,'show'])->name('sua_cat');
    //s???n ph???m
    Route::get('/product',[ProductController::class,'index'])->name('show');
    Route::get('/create_form_product',[ProductController::class,'create'])->name('create_form_product');
    Route::put('/create_product/{id}',[ProductController::class,'update'])->name('create_product');
    Route::post('/create_product',[ProductController::class,'store'])->name('luu_product');
    Route::delete('/delete_pro{product}',[ProductController::class,'destroy'])->name('delete_pro');
    Route::get('/formEdit_pro/{product}',[ProductController::class,'show'])->name('formEdit_pro');
    Route::get('/show_image/{product}',[ProductController::class,'show_image'])->name('show_image');
 Route::prefix('/image')->name('image.')->group(function(){
    Route::get('/',[ImageController::class,'index'])->name('index');
    Route::get('/create',[ImageController::class,'create'])->name('create');
    Route::delete('/delete/{image}',[ImageController::class,'destroy'])->name('delete');
    Route::get('/edit',[ImageController::class,'edit'])->name('edit');
    Route::post('/create_image',[ImageController::class,'store'])->name('create_image');
    Route::put('/create_image/{image}',[ImageController::class,'update'])->name('create_image');
    Route::get('/form_edit_image/{image}',[ImageController::class,'edit'])->name('form_edit_image');
});
Route::prefix('/user')->name('user.')->group(function(){
    Route::get('/',[UserController::class,'index'])->name('index');
    Route::put('sua_quyen/{user}',[UserController::class,'sua_quyen'])->name('sua_quyen');
    Route::put('fix_status/{user}',[UserController::class,'fix_status'])->name('fix_status');
});
Route::prefix('/order')->name('order.')->group(function(){
    Route::get('/',[OrderController::class,'index'])->name('index');
    Route::get('order_detail/{id}',[OrderController::class,'detail'])->name('order_detail');
    Route::put('status/{order}',[OrderController::class,'status'])->name('status');
});


});
    Route::middleware('auth')->get('/auth/logout',[LoginController::class,'logout'])->name('logout');
    Route::get('showCart',[CartController::class,'index'])->name('showCart');
    Route::get('addCart/{id}',[CartController::class,'AddCart'])->name('addCart');
    Route::get('delete/{id}',[CartController::class,'DeleteCart'])->name('delete');
    Route::get('save_edit/{id}',[CartController::class,'save_edit'])->name('save_edit');
    Route::post('checkout',[CartController::class,'checkout'])->name('checkout');



