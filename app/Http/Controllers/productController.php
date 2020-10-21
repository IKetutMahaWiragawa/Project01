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

}
