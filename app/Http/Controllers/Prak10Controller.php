<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategori;

class Prak10Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Menampilkan data dari tabel kategori
        $KDATA = kategori::get();
        $JRek  = kategori::count();

        return view('praktikum10.tugas1', compact('KDATA','JRek'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Menampilkan form untuk menambah data baru
        return view('.praktikum10.tugas1create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Menerima data dari form buat kategori
        $psn = [
            'required' => 'Field harus diisi',
        ];
        
        $this->validate($request,[
            'txkat' => 'required',
            'txdesk' => 'required',
        ],$psn);
        
        kategori::create([
                'Kategori'=>$request->txkat,
                'Keterangan'=>$request->txdesk,
                ]);
        return redirect()->route('prak10.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //menampilkan form dan data yang terletak di ubah
        $eDit = kategori::where('Id',$id)->first();
        return view ('praktikum10.tugas1edit',compact ('eDit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //untuk Proses Perubahana Data
        kategori::where('Id',$id)->update([
            'Kategori'=>$request ->txkat,
            'Keterangan'=>$request ->txdesk,
        ]);
        return redirect()->route('prak10.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Proses Hapus Data
        kategori::where('Id',$id)->delete();
        return redirect()->route('prak10.index');
    }
}
