@extends('uas/kerangka')
@section('judul','Data Mahasiswa')
@section('konten')
<div class="row">
  <div class="col-md-9">
    <h2><b>Data Mahasiswa</b></h2>
  </div>
  <div class="col-md-3"></div>
</div>
<div class="row">
  <div class="col-md-6 mt-3 pl-5">
    <h6>Jumlah Mahasiswa = {{$Jdata}}</h6>
  </div>
  <div class="col-md-6">
    <form class="form-inline my-2 my-lg-0">
      <input id="cx" class="form-control mr-sm-2" type="search" placeholder="Cari data" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="button" id="caridata">Telusuri</button>
    </form>
  </div>
</div>
<hr>
<table class="table table-hover table-striped table-bordered">
  <thead class="thead-light">
    <tr>
      <th scope="col">No</th>
      <th scope="col">NIM</th>
      <th scope="col">Nama</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Indeks Nilai</th>
      <th scope="col"></th>
      <th scope="col"><a class="btn btn-success" href="{{route('page.create')}}">Tambah Data</a></th>
    </tr>
  </thead>
  <tbody>
    @foreach($Mdata as $i=>$p)
    <tr>
      <th scope="row">{{$i+1}}</th>
      <td>{{$p->nim}}</td>
      <td>{{$p->nama}}</td>
      <td>{{$p->jk}}</td>
      <td class="text-center">{{$p->kode}}</td>
      <td class="text-center">{{$p->indeks}}</td>
      <td class="text-center"><a class="btn btn-warning text-white" href="{{route('page.edit',$p->nim)}}">Ubah</a></td>
      <td class="text-center">
        <form method="post" action="{{route('page.destroy',$p->nim)}}">
          @csrf()
          @method('DELETE')
          <button type="submit" class="btn btn-danger" name="btnkirim">Hapus</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@stop