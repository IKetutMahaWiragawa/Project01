<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutController extends Controller
{
    //Property untuk menampilkan view about
    public function index()
    {
        return view('about');
    }
}
