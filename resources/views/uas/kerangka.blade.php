<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" src="css/all.min.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>@yield('judul')</title>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-dark bg-dark navbar-expand-lg fixed-top">
    <a class="navbar-brand" href="#"><b>Sistem Informasi Mata Kuliah | Pemrograman WEB II </b></a>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{route('logout')}}"><button class="btn btn-primary">Log Out</button> <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </nav>
  <!-- akhir navbar -->
  <div class="row" style="height : 71px; "></div>
  <!-- navbar flex -->
  <div class="row no-gutters">
    <div class="col-md-2">
      <div class=" bg-secondary pt-4 pb-4 rounded">
        <ul class="nav flex-column">
          <li class="nav-item">
            <i class="fas fa-tachometer-alt"></i><a class="nav-link text-white " href="/beranda">Dashboard</a>
            <hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="{{route('page.index')}}">Data Mahasiswa</a>
            <hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="/jurusan">Data Jurusan</a>
            <hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="/nilai">Presentase Nilai</a>
            <hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="/jadwal">Jadwal Kuliah</a>
          </li>
          </u>
      </div>
    </div>
    <!-- navbar flex -->

    <div class="col-md-10 mt-2 pl-4 pt-1 pr-2">
      <div class="conainer-fluid">@yield('konten')</div>
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="js/jquery.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#caridata').click(function(e) {
        var idCari = "{{route('page.index')}}/" + $('#cx').val();
        window.location.href = idCari;
      });
    });
  </script>

</body>

</html>