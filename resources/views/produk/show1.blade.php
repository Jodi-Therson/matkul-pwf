<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Laravel | Control struktur blade template</title>
</head>

<body>
    @if (count($produk) == 1)
    <p>Jumlah produk adalah satu</p>
    @elseif(count($produk) > 1)
    <p>Jumlah produk lebih dari satu</p>
    @else
    <p>Tidak ada Data Produk</p>
    @endif
</body>

</html>