<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class produksController extends Controller
{
    public function index(){
        $produk = DB::table('produks')->get();
        return view ('produk.viewproduk',compact('produk'));
    }
}
