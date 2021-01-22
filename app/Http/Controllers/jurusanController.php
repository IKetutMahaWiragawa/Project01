<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jurusan;

class jurusanController extends Controller
{
    public function index()
    {
        //menampilkan data mahasiswa
        $JDdata = jurusan::get();
        $JJdata = jurusan::count();

        return view('uas.jurusan', compact('JDdata', 'JJdata'));
    }
}
