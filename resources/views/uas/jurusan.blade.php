@extends('uas/kerangka')
@section('judul','Data Jurusan')
@section('konten')
<div class="row">
  <div class="col-md-9">
    <i class="fas fa-tachometer-alt"></i>
    <h2><b>Data Jurusan</b></h2>
  </div>
  <div class="col-md-3"></div>
</div>
<div class="row">
  <div class="col-md-9 pl-5">
    <h6> Mata Kuliah Pemrograman WEB II</h6>
  </div>
  <div class="col-md-3">
    <h6>Jumlah Data Jurusan = {{$JJdata}}</h6>
  </div>
</div>
<hr>
<table class="table table-hover table-striped table-bordered text-center">
  <thead class="thead-light">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kode </th>
      <th scope="col">Nama Jurusan</th>
      <th scope="col">Ketua Program Studi</th>
    </tr>
  </thead>
  <tbody>
    @foreach($JDdata as $i=>$p)
    <tr>
      <th scope="row">{{$i+1}}</th>
      <td>{{$p->kode}}</td>
      <td>{{$p->namajur}}</td>
      <td>{{$p->ketuajur}}</td>
      @endforeach
  </tbody>
</table>
@stop