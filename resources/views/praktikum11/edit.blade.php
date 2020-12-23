@extends('praktikum')
@section('JudulPage','Perubahan Data')
@section('Konten')
<h3>Perubahan Data Produk</h3>
<h4>Edit Data Produk ID : {{ $eDit-> id}}</h4>
<div class="container-fluid">
<form method="POST" action="http://localhost:8000/prak11/{{ $eDit->id }}">
  {{csrf_field()}}
  @method ('PUT')
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Produk</label>
    <input type="text" name="txProduk" class="form-control" id="txProduk" value="{{ $eDit -> namaproduk }}">
    <small id="emailHelp" class="form-text text-muted">Isikan Nama Produk
    @if($errors->has('txProduk'))
      <span class="badge badge-danger">
      {{$errors->first('txProduk')}}
      </span>
    @endif
    </small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Harga Beli</label>
    <input type="text" name="txHargaBeli" class="form-control" id="txHargaBeli" value="{{ $eDit -> harga_beli }}">
    <small id="emailHelp" class="form-text text-muted">Isikan Harga Beli
    @if($errors->has('txHargaBeli'))
      <span class="badge badge-danger">
      {{$errors->first('txHargaBeli')}}
      </span>
    @endif
    </small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Harga Jual</label>
    <input type="text" name="txHargaJual" class="form-control" id="txHargaJual" value="{{ $eDit -> harga_jual}}">
    <small id="emailHelp" class="form-text text-muted">Isikan Harga Jual
    @if($errors->has('txHargaJual'))
      <span class="badge badge-danger">
      {{$errors->first('txHargaJual')}}
      </span>
    @endif
    </small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Jumlah Stok</label>
    <input type="text" name="txQTY" class="form-control" id="txQTY" value="{{ $eDit -> qty }}">
    <small id="emailHelp" class="form-text text-muted">Isikan Jumlah Stock Produk
    @if($errors->has('txQTY'))
      <span class="badge badge-danger">
      {{$errors->first('txQTY')}}
      </span>
    @endif
    </small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Kategori</label>
    <select name="txKat" class="form-control" id="txKat" value="{{ $eDit -> id_kat }}">
    @foreach($DKat as $i => $k)
        <option value="{{$k->Id}}">{{$k->Kategori}}</option>
    @endforeach
    </select>
    <small id="emailHelp" class="form-text text-muted">Pilih Kategori Produk
    @if($errors->has('txKat'))
      <span class="badge badge-danger">
      {{$errors->first('txKat')}}
      </span>
    @endif
    </small>
  </div>
  <button type="submit" class="btn btn-primary">Ubah Data</button>
</form>
</div>
@stop