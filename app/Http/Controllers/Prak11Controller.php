<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\kategori;
use App\Models\produks;


class Prak11Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
     /**
     * Log the user out of the application.
     *
     * @return \Illuminate\Http\Response
     */
    Public function logout()
    {
        Auth::logout();
        return redirect('/prak11');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Menampilkan seluruh data dari tabel Produk
        $KData = produks::get();
        $JRek  = produks::count();

        return view('praktikum11.index',compact('KData','JRek'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Menampilkan form untuk menambah data baru
        $DKat = kategori::get();

        return view('praktikum11.create',compact('DKat'));
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
            'txProduk'=> 'required',
            'txHargaBeli' => 'required|numeric',
            'txHargaJual' => 'required|numeric',
            'txQTY' => 'required|numeric',
            'txKat' => 'required|numeric',
        ];
        $msg = [
            'required' => 'wajib diisi',
            'numeric' => 'diisi dengan data angka',
        ];
        $this->validate($request,$aturan,$msg);
        //Menambahkan data baru dari form
        produks::create([
            'namaproduk'=> $request->txProduk,
            'harga_beli'=>$request->txHargaBeli,
            'harga_jual'=> $request->txHargaJual,
            'qty'=>$request->txQTY,
            'id_kat' => $request->txKat,
            ]);
        return redirect()->route('prak11.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Menampilkan data berdasarkan pencarian nama produk dengan id
            $kreteria = "%".$id."%";
            $KData = produks::where("namaproduk",'like',$kreteria)->get();
            $JRek = produks::where("namaproduk",$kreteria)->count();
        
            return view('praktikum11.index',compact('KData','JRek'));
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
        $DKat = kategori::get();
        $eDit = produks::where('id',$id)->first();
        return view ('praktikum11.edit',compact ('eDit','DKat'));
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
        //untuk Proses Perubahan Data
        produks::where('id',$id)->update([
            'namaproduk'=>$request ->txProduk,
            'harga_beli'=>$request->txHargaBeli,
            'harga_jual'=> $request->txHargaJual,
            'qty'=>$request ->txQTY,
            'id_kat'=>$request ->txKat,
        ]);
        return redirect()->route('prak11.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ////Proses Hapus Data
        produks::where('id',$id)->delete();
        return redirect()->route('prak11.index');
    }
}
