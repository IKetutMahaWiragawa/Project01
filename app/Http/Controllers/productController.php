<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    //Property untuk Index
    public function index()
    {
        $produk = "Sepatu JN 325";
        return view('produk/index');
    }

    //Property showproduk
    public function showproduk(){
        $produk = ["Sepatu JN","Minuman Bersoda","Buku Sejarah","Mouse Pad"];
        return view('produk.showproduk',compact('produk'));
    }
}
