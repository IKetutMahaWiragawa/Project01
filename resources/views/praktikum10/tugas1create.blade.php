<!DOCTYPE html>
<html >
<head>
    <title>Tambah Data Kategori</title>
</head>
<body>
    <h3>Menambah Data Kategori</h3>

    @if(count($errors) > 0)
        <div>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </div>
    @endif
    <form method="POST" action="http://localhost:8000/prak10">
        @csrf()
        @method ('POST')
        <div class="txlabel">Kategori</div>
        <div class="inputtext"><input type="text" name="txkat">
        @if($errors->has("txkat"))
            <span>Tidak Boleh Kosong</span>
        @endif
        </div>
        <div class="txlabel">Deskripsi</div>
        <div class="inputtext"><input type="text" name="txdesk">
        @if($errors->has("txdesk"))
            <span>Tidak Boleh Kosong</span>
        @endif
        </div>
        <div class="tombol">
            <input type="submit" name="btnkirim" value=" Buat Data ">
        </div>
    </form>
</body>
</html>