<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\jurusan;
use App\Models\mahasiswa;

class berandaController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Log the user out of the application.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function index()
    {
        //menampilkan jumlah data 
        $JMdata = mahasiswa::count();
        $JJdata = jurusan::count();

        return view('uas.beranda', compact('JMdata', 'JJdata'));
    }
}
