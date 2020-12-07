<!DOCTYPE html>
<html >
<head>
   <title>Daftar Kategori</title>
</head>
<body>
    <h3>Data Kategori</h3>
    Jumlah data = {{ $JRek }}

    <a href="http://localhost:8000/prak10/create">Tambah Data</a>
    <table>
        <thead>
        <tr>
            <th>#</th>
            <th>ID Kategori</th>
            <th>Kategori</th>
            <th>Deskripsi</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($KDATA as $dt => $nval )
        <tr>
            <td>{{ $dt+1 }}</td>
            <td>{{ $nval->Id }}</td>
            <td>{{ $nval->Kategori}}</td>
            <td>{{ $nval->Keterangan}}</td>
            <td><a href="http://localhost:8000/prak10/{{ $nval->Id }}/edit">Edit</a></td>
        </tr>
        @endforeach
        </tbody>
    </table>

</body>
</html>