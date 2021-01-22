@extends('uas/kerangka')
@section('judul','Dashboard')
@section('konten')
<div class="row">
  <div class="col-md-9">
    <i class="fas fa-tachometer-alt"></i>
    <h2><b>Dashboard</b></h2>
  </div>
  <div class="col-md-3"></div>
</div>
<div class="row">
  <div class="col-md-9 pl-5">
    <h6>Selamat Datang Di Sistem Informasi Mata Kuliah Pemrograman WEB II</h6>
  </div>
  <div class="col-md-3">
  </div>
</div>
<hr>
<div class="row">
  <div class="card mr-1 mt-1 bg-info" style="width: 17rem;">
    <div class="card-body">
      <h5 class="card-title text-white">Jumlah Mahasiswa</h5>
      <div class="display-4 text-white pb-2"><b>{{$JMdata}}</b></div>
      <a href="{{route('page.index')}}" class="btn btn-primary">Lihat Detail</a>
    </div>
  </div>
  <div class="card mr-1 mt-1 bg-danger" style="width: 17rem;">
    <div class="card-body ">
      <h5 class="card-title text-white">Jumlah Jurusan</h5>
      <div class="display-4 text-white pb-2"><b>{{$JJdata}}</b></div>
      <a href="/jurusan" class="btn btn-primary">Lihat Detail</a>
    </div>
  </div>
  <div class="card mr-1 mt-1 bg-success" style="width: 17rem;">
    <div class="card-body ">
      <h5 class="card-title text-white">Presentase</h5>
      <div class="display-4 text-white pb-2"><b>Nilai</b></div>
      <a href="/nilai" class="btn btn-primary">Lihat Detail</a>
    </div>
  </div>
  <div class="card mt-1 bg-warning" style="width: 17rem;">
    <div class="card-body">
      <h5 class="card-title text-white">Daftar</h5>
      <div class="display-4 text-white pb-2"><b>Jadwal</b></div>
      <a href="/jadwal" class="btn btn-primary">Lihat Detail</a>
    </div>
  </div>
</div>
@stop