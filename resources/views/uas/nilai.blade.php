@extends('uas/kerangka')
@section('judul','Jadwal Kuliah')
@section('konten')
<div class="row">
  <div class="col-md-9">
    <i class="fas fa-tachometer-alt"></i>
    <h2><b>Presentase Nilai</b></h2>
  </div>
  <div class="col-md-3"></div>
</div>
<div class="row">
  <div class="col-md-9 pl-5">
    <h6> Mata Kuliah Pemrograman WEB II</h6>
  </div>
  <div class="col-md-3">
  </div>
</div>
<hr>
<table class="table table-hover table-striped table-bordered text-center">
  <thead class="thead-light">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kategori</th>
      <th scope="col">Prensentase</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Aktif</td>
      <td>15 %</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Tugas</td>
      <td>25 %</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Quis</td>
      <td>20 %</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Ujian Tengah Semester ( UTS )</td>
      <td>20 %</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Ujian Akhir Semester ( UAS )</td>
      <td>20 %</td>
    </tr>
  </tbody>
</table>
@stop