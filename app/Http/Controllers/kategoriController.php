<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class kategoriController extends Controller
{
    public function index(){
        $Pkategori = DB::table('kategori')->get();
        return view ('produk.viewkategori',compact('Pkategori'));
    }
}
