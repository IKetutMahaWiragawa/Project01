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
Route::get('/template', function () {

    return view('desain/index');
});

Route::get('/index.html', function () {
    $judul = 'Selamat Datang';
    $konten = 'Selamat Datang di Website Saya, berikut ini merupakan halaman utama website';
    return view('websiteku/home',compact('judul','konten'));
});

Route::get('/examples.html',function (){
    $judul = 'Example';
    $konten = 'Isi Konten Example';
    return view ('websiteku/example',compact('judul','konten'));
});

Route::get('/page.html',function (){
    $judul = 'Page';
    $konten = 'Isi Konten Page';
    return view ('websiteku/page',compact('judul','konten'));
});
Route::get('/another_page.html', function (){
    $judul = 'Another Page';
    $konten = 'Isi Konten Another Page';
    return view ('websiteku/anotherpage',compact('judul','konten'));
});
Route::get('/contact.html', function (){
    $judul = 'Contact Us';
    $konten = 'Isi Konten Contact Us';
    return view ('websiteku/contactus',compact('judul','konten'));
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

Route::get('aboutController',[aboutController::class,'index']);
