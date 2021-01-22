<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//menggunakan model kategori dan produks
use App\Models\kategori;
use App\Models\produks;


class Prak14Controller extends Controller
{
    /** 
     * Menampilkan Graph dari Jumlah stock produk per kategori
     * 
     * @return \Illuminate\Http\Response
     */

    public function ChartProdperkat()
    {
        $Kgrp = kategori::get();
        $rl = array("role" => "Blue");
        $a = array("Element", "TotProd", $rl);
        $dta = array($a);

        foreach ($Kgrp as $i => $v) {
            $prd = produks::where('id_kat', $v->idkat)->get();
            $jml = 0;
            foreach ($prd as $i => $v) {
                $jml += $v->qty;
            }
            array_push($dta, array($v->kategori, $jml, "yellow"));
        }
        return view('praktikum14.graph')
            ->with('JNS', "BAR")
            ->with('JUDULGRAFIK', "Total Produk per kategori")
            ->with('DTA', json_encode($dta));
    }
}
