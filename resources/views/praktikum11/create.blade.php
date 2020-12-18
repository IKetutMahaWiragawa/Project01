@extends('praktikum')
@section('JudulPage','Penambahan Data Baru')
@section('Konten')
<h3>Penambahan Data Produk</h3>
<div class="container-fluid">
<form method="POST" action="{{route('prak11.store')}}">
  {{csrf_field()}}
  <input type="hidden" name="_method" value="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Produk</label>
    <input type="text" name="txProduk" class="form-control" id="txProduk" value="{{old('txProduk')}}">
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
    <input type="text" name="txHargaBeli" class="form-control" id="txHargaBeli" value="{{old('txHargaBeli')}}">
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
    <input type="text" name="txHargaJual" class="form-control" id="txHargaJual" value="{{old('txHargaJual')}}">
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
    <input type="text" name="txQTY" class="form-control" id="txQTY" value="{{old('txQTY')}}">
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
    <select name="txKat" class="form-control" id="txKat">
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
  <button type="submit" class="btn btn-primary">Buat Data Baru</button>
</form>
</div>
@stop