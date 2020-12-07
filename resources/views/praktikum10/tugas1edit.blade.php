<!DOCTYPE html>
<html >
<head>
    <title>Edit Data Kategori</title>
</head>
<body>
    <h3>Edit Data Kategori ID : {{ $eDit-> Id}}</h3>

    <form method="POST" action="http://localhost:8000/prak10/{{ $eDit->Id }}">
        @csrf()
        @method ('PUT')
        <div class="txlabel">Kategori</div>
        <div class="inputtext"><input type="text" name="txkat" value="{{ $eDit->Kategori }}"></div>
        <div class="txlabel">Deskripsi</div>
        <div class="inputtext"><input type="text" name="txdesk"value="{{ $eDit->Keterangan }}"></div>
        <div class="tombol">
            <input type="submit" name="btnkirim" value=" Update Data ">
        </div>
    </form>
    <form method="post" action="http://localhost:8000/prak10/{{ $eDit->Id }}">
        @csrf()
        @method('DELETE')
        <div class="tombol">
            <input type="submit" class="btn" name="btnkirim" value=" Delete Data ">
        </div>
    </form>
</body>
</html>