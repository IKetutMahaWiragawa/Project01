@extends('uas/kerangka')
@section('judul','Jadwal Kuliah')
@section('konten')
<div class="row">
  <div class="col-md-9">
    <i class="fas fa-tachometer-alt"></i>
    <h2><b>Jadwal Perkuliahan</b></h2>
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
      <th scope="col">Kelas</th>
      <th scope="col">Hari</th>
      <th scope="col">Jam</th>
      <th scope="col">Ruangan</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>W</td>
      <td>Jumat</td>
      <td>08:00 - 11:00</td>
      <td>202</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>S</td>
      <td>Jumat</td>
      <td>08:00 - 11:00</td>
      <td>202</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>T</td>
      <td>Rabu</td>
      <td>09:00 - 12:00</td>
      <td>101</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>B</td>
      <td>Jumat</td>
      <td>10:00 - 14:00</td>
      <td>Lab B</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>A</td>
      <td>Senin</td>
      <td>13:00 - 15:00</td>
      <td>534</td>
    </tr>
  </tbody>
</table>
@stop