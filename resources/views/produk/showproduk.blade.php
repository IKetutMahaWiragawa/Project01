<!DOCTYPE html>
<html>
    <head>
        <title>Latihan View 04</title>
    </head>
    <body>
    
        @if(count($produk)==1)
            <p>{{ "Jumlah Data adalah Satu" }}</p>
        @elseif(count($produk)>1)
            <p>{{ "Jumlah Data lebih dari Satu" }}</p>

            @for($i=0;$i<count($produk);$i++)
                <p>No : {{$i}}; Nama Produk : {{ $produk[$i] }}</p>
            @endfor
        @else
            <p>Tidak ada Data</p>
        @endif
    </body>
</html>