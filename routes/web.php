<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;
use App\Http\Controllers\aboutController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/aboutus', function(){
    echo "Ini Merupakan Contoh Sebuah Page (Page About)";
})->name("tentang");

Route::get('/show/{id?}', function($id=1){
    echo "Parameter ID : " .$id;
})->where ('id','[0-9]+');

Route::get('/utama', function(){
    echo "Ini Page Utama";
    echo "<br>";
    echo "<a href='".route('tentang')."'>About</a>";
});

Route::get('/produk',[productController::class,'index']);

Route::get("/latihanView01",function(){
    return view("latihan01");
});

Route::get('/produk/showproduk',[productController::class,'showproduk']);

Route::get('/',function(){
    return view('index');
});

Route::get('/about',function(){
    return view('about');
});

Route::get("aboutController",[aboutController::class,'index']);
