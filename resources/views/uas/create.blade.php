@extends('uas/kerangka')
@section('judul','Penambahan Data Mahasiswa Baru')
@section('konten')
<h2><b>Penambahan Data Mahasiswa</b></h2>
<hr>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
      <form method="POST" action="{{route('page.store')}}">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="POST">
        <div class="form-group">
          <div class="col-md-4">
            <label for="exampleInputEmail1"><b>Nomor Induk Mahasiswa</b></label>
          </div>
          <div class="col-md-4">
            <input type="text" name="txnim" class="form-control" id="txnim" value="{{old('txnim')}}">
            <small id="emailHelp" class="form-text text-muted">
              @if($errors->has('txnim'))
              <span class="badge badge-danger">
                {{$errors->first('txnim')}}
              </span>
              @endif
            </small>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-8">
            <label for="exampleInputEmail1"><b>Nama Lengkap</b></label>
          </div>
          <div class="col-md-8">
            <input type="text" name="txnama" class="form-control" id="txnama" value="{{old('txnama')}}">
            <small id="emailHelp" class="form-text text-muted">
              @if($errors->has('txnama'))
              <span class="badge badge-danger">
                {{$errors->first('txnama')}}
              </span>
              @endif
            </small>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-4">
            <label for="exampleInputEmail"><b>Jenis Kelamin</b></label>
          </div>
          <div class="col-md-4">
            <select type="text" name="txjk" id="txjk" class="form-control">
              <option value="">Pilih Jenis Kelamin</option>
              <option value="Laki - laki">Laki - laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
            <small id="emailHelp" class="form-text text-muted">
              @if($errors->has('txjk'))
              <span class="badge badge-danger">
                {{$errors->first('txjk')}}
              </span>
              @endif
            </small>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-4">
            <label for="exampleInputEmail1"><b>Jurusan</b></label>
          </div>
          <div class="col-md-4">
            <select name="txkode" class="form-control" id="txkode">
              <option value="">Pilih Jurusan</option>
              @foreach($Djur as $i => $k)
              <option value="{{$k->kode}}">{{$k->kode}}</option>
              @endforeach
            </select>
            <small id="emailHelp" class="form-text text-muted">
              @if($errors->has('txjur'))
              <span class="badge badge-danger">
                {{$errors->first('txjur')}}
              </span>
              @endif
            </small>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-4">
            <label for="exampleInputEmail1"><b>Indeks Nilai</b></label>
          </div>
          <div class="col-md-3">
            <select name="txindeks" class="form-control" id="txindeks">
              <option value="">Pilih Indeks Nilai</option>
              <option value="A">A</option>
              <option value="B">B</option>
              <option value="C">C</option>
              <option value="D">D</option>
              <option value="E">E</option>
            </select>
            <small id="emailHelp" class="form-text text-muted">
              @if($errors->has('txindeks'))
              <span class="badge badge-danger">
                {{$errors->first('txindeks')}}
              </span>
              @endif
            </small>
          </div>
        </div>
        <div class="col-md-4">
          <button type="submit" class="btn btn-primary">Buat Data Baru</button>
        </div>
      </form>
    </div>
  </div>
  <div class="col-md-1"></div>
</div>
@stop