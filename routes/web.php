<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\produksController;
use App\Http\Controllers\kategoriController;
use App\Http\Controllers\prak9Controller;
use App\Http\Controllers\Prak10Controller;
use App\Http\Controllers\Prak11Controller;
use App\Http\Controllers\Prak14Controller;
use App\Http\Controllers\mahasiswaController;
use App\Http\Controllers\berandaController;
use App\Http\Controllers\jurusanController;
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
    return view('websiteku/home', compact('judul', 'konten'));
});

Route::get('/examples.html', function () {
    $judul = 'Example';
    $konten = 'Isi Konten Example';
    return view('websiteku/example', compact('judul', 'konten'));
});

Route::get('/page.html', function () {
    $judul = 'Page';
    $konten = 'Isi Konten Page';
    return view('websiteku/page', compact('judul', 'konten'));
});
Route::get('/another_page.html', function () {
    $judul = 'Another Page';
    $konten = 'Isi Konten Another Page';
    return view('websiteku/anotherpage', compact('judul', 'konten'));
});
Route::get('/contact.html', function () {
    $judul = 'Contact Us';
    $konten = 'Isi Konten Contact Us';
    return view('websiteku/contactus', compact('judul', 'konten'));
});

Route::get('/aboutus', function () {
    echo "Ini Merupakan Contoh Sebuah Page (Page About)";
})->name("tentang");

Route::get('/show/{id?}', function ($id = 1) {
    echo "Parameter ID : " . $id;
})->where('id', '[0-9]+');

Route::get('/utama', function () {
    echo "Ini Page Utama";
    echo "<br>";
    echo "<a href='" . route('tentang') . "'>About</a>";
});

Route::get('/product', [productController::class, 'index']);

Route::get("/latihanView01", function () {
    return view("latihan01");
});

Route::get('/produk/showproduk', [productController::class, 'showproduk']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ind', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('aboutController', [aboutController::class, 'index']);

Route::get('/produks', [produksController::class, 'index']);

Route::get('/kategori', [kategoriController::class, 'index']);

Route::get('/prak9_01', [prak9Controller::class, 'QB_tugas1']);

Route::get('/prak9_02', [prak9Controller::class, 'QB_tugas2']);

Route::get('/prak9_03', [prak9Controller::class, 'QB_tugas3']);

//Route Praktikum 10
Route::resource('/prak10', Prak10Controller::class);
//Route Praktikum 11
Route::resource('/prak11', Prak11Controller::class);

//route untuk logout
Route::get('/prak11/logout', [Prak11Controller::class, 'logout'])->name('prak11.logout');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//Route untuk Graph
Route::get('/prak14/ChartProdperKat', [Prak14Controller::class, 'ChartProdperKat'])->name('prak14.ProdukperKategori');

//Route untuk Uas
Route::resource('/page', mahasiswaController::class);

Route::get('/jadwal', function () {
    return view('uas.jadwal');
});
Route::get('/nilai', function () {
    return view('uas.nilai');
});
Route::get('/jurusan', [jurusanController::class, 'index']);

Route::get('/beranda', [berandaController::class, 'index']);

Route::get('/mahasiswa', [mahasiswaController::class, 'index']);

Route::get('/logout', [berandaController::class, 'logout']);
