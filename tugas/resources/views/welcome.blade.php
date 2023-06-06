<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Laravel Multiple Database Connections</title>
  </head>
  <body>
    <div class="container my-5">
        <h1 class="fs-5 fw-bold my-3 text-center">TUGAS</h1>
        <div class="row">
            <h2 class="fs-5 fw-bold my-3">PRODUKSI</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">kode produk</th>
                        <th scope="col">nama produk</th>
                        <th scope="col">tanggal produksi</th>
                        <th scope="col">harga jual</th>
                        <th scope="col">jumlah stok</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produksi as $key => $item)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $item->kode_produk}}</td>
                            <td>{{ $item->nama_produk }}</td>
                            <td>{{ $item->tangga_produksi }}</td>
                            <td>{{ $item->harga_jual}}</td>
                            <td>{{ $item->jumlah_stok}}</td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="row">
            <h2 class="fs-5 fw-bold my-3">DISTRIBUSI </h2>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID Pemasukan</th>
                        <th scope="col">kode produk</th>
                        <th scope="col">tanggal pemasukan</th>
                        <th scope="col">jumlah pemasukan</th>
                        <th scope="col">keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($distribusi as $key => $item)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $item->id_pemasukan}}</td>
                            <td>{{ $item->kode_produk }}</td>
                            <td>{{ $item->tanggal_pemasukan }}</td>
                            <td>{{ $item->jumlah_pemasukan}}</td>
                            <td>{{ $item->keterangan}}</td>
                        </tr>
                    @endforeach
                </tr>
        </table>
    </div>

    <div class="row">
        <h2 class="fs-5 fw-bold my-3">PENGIRIMAN</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                        <th scope="col">id pemasukan</th>
                        <th scope="col">kode produk</th>
                        <th scope="col">tanggal pemasukan</th>
                        <th scope="col">jumlah pemasukan</th>
                        <th scope="col">status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pengiriman as $key => $item)
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $item->id_pemasukan}}</td>
                        <td>{{ $item->kode_produk}}</td>
                        <td>{{ $item->tanggal_pemasukan}}</td>
                        <td>{{ $item->jumlah_pemasukan }}</td>
                        <td>{{ $item->status }}</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

  </body>
</html>
