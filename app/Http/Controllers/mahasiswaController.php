<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jurusan;
use App\Models\mahasiswa;

class mahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan data mahasiswa
        $Mdata = mahasiswa::get();
        $Jdata = mahasiswa::count();

        return view('uas.mahasiswa', compact('Mdata', 'Jdata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //menampilkan form untuk menambah data mahasiswa
        $Djur = jurusan::get();

        return view('uas.create', compact('Djur'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //membuat Validasi Data
        $aturan = [
            'txnim' => 'required|numeric',
            'txnama' => 'required',
            'txjk' => 'required',
            'txkode' => 'required',
            'txindeks' => 'required',
        ];
        $pesan = [
            'required' => 'Wajib diisi',
            'numeric' => 'Diisi dengan data angka',
        ];
        $this->validate($request, $aturan, $pesan);
        //menambah data mahasiswa dari form
        mahasiswa::create([
            'nim' => $request->txnim,
            'nama' => $request->txnama,
            'jk' => $request->txjk,
            'kode' => $request->txkode,
            'indeks' => $request->txindeks,
        ]);

        return redirect()->route('page.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Menampilkan data berdasarkan pencarian nama mahasiswa dengan nim

        $kriteria = "%" . $id . "%";
        $Mdata = mahasiswa::where("nama", 'like', $kriteria)->get();
        $Jdata = mahasiswa::where("nama", 'like', $kriteria)->count();

        return view('uas.mahasiswa', compact('Mdata', 'Jdata'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //menampilkan form dan data yang terletak di edit
        $Djur = jurusan::get();
        $edit = mahasiswa::where('nim', $id)->first();
        return view('uas.edit', compact('edit', 'Djur'));
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
        //untuk Proses Perubahan Data mahasiswa
        mahasiswa::where('nim', $id)->update([
            'nim' => $request->txnim,
            'nama' => $request->txnama,
            'jk' => $request->txjk,
            'kode' => $request->txkode,
            'indeks' => $request->txindeks,
        ]);
        return redirect()->route('page.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //proses untuk hapus data mahasiswa
        mahasiswa::where('nim', $id)->delete();

        return redirect()->route('page.index');
    }
}
