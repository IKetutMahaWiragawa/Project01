<!DOCTYPE html>
<html>
<head>
    <title>Latihan view 02</title>
</head>
<body>
    <h2>Data Produk Berdasarkan Kategori ID : {{$id_kat}}</b></h2>
    Jumlah Data : {{$JRek}}
    <table border="1">
        <thead>
            <tr>
                <th>No.</th>
                <th>Kode Jenis</th>
                <th>Nama Produk</th>    
                <th>Stcok</th>
                <th>Harga Beli</th>
                <th>Harga Jual</th>
            </tr>
        </thead>
        <tbody>
            @foreach($PData as $i=>$p)
            <tr>
                <td>{{$i+1}}</td>
                <td>{{$p->id_kat}}</td>
                <td>{{$p->namaproduk}}</td>
                <td>{{$p->qty}}</td>
                <td>{{$p->harga_beli}}</td>
                <td>{{$p->harga_jual}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>