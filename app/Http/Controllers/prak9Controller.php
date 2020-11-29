<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class prak9Controller extends Controller
{
    //Menampilkan total data record 
    public function QB_tugas1(){
        $JRekProduk = DB::table('produks')->count();
        $JRekkategori = DB::table('kategori')->count();
    
        return view('praktikum.tugas1',['JRekProduk'=>$JRekProduk, 'JRekkategori'=>$JRekkategori]);
    }
    public function QB_tugas2(){
        $id_kat = 3;
        $PData = DB::table('produks')->where('id_kat',$id_kat)->get();
        $JRek = DB::table('produks')->where('id_kat',$id_kat)->count();

        return view('praktikum.tugas2',compact('PData','id_kat','JRek'));
    }
    public function QB_tugas3(){
        $PData = DB::table('produks')
            ->join('kategori','produks.id_kat','=','kategori.Id')
            ->get();
        $JRek = DB::table('produks')
            ->join('kategori','produks.id_kat','=','kategori.Id')
            ->count();

        return view('praktikum.tugas3',compact('JRek','PData'));
        }
}
