<!DOCTYPE html>
<html>
<head>
    <title>Tugas 2 dan UTS</title>
</head>
<body>
    <h2><b>Tabel Kategori</b></h2>
    <table border="1">
        <thead>
            <tr>
                <th>No.</th>
                <th>Kategori</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($Pkategori as $i=>$p)
            <tr>
                <td>{{$i+1}}</td>
                <td>{{$p->Kategori}}</td>
                <td>{{$p->Keterangan}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>