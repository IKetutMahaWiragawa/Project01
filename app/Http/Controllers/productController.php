<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    //Property untuk Index
    public function index(){
        $isi = "Ini merupakan isi dari Property Index dalam Controller productController";
    return $isi;
    }

}
