<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">adit websitee</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ route('login') }}">login</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">register</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a></li>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">-data-</button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="data-barang">barang</a></li>
                            <li><a class="dropdown-item" href="data-cabang">cabang</a></li>
                            <li><a class="dropdown-item" href="data-pekerja">pekerja</a></li>
                            <li><a class="dropdown-item" href="data-keuangan">keuangan</a></li>
                            </ul>
                    </div>
                </ul>
            </div>
        </div>
    </nav>

    <h1 style="text-align: center">barang barang</h1>
    <div class="shadow p-3 mb-5 bg-body rounded">
      <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">no</th>
                <th scope="col">nama cabang</th>
                <th scope="col">alamat</th>
                <th scope="col">pegawai</th>
                <th scope="col">tanggal</th>
              </tr>
            </thead>
            <?php $nomor = 1; ?>
              @foreach ($cabang as $cabang)
              <tr>
                <th scope="row">{{ $nomor++ }}</th>
                <td>{{ $cabang->nama_cabang }}</td>
                <td>{{ $cabang->alamat }}</td> 
                <td>{{ $cabang->pegawai }}</td>
                <td>{{ $cabang->tanggal }}</td>
            </tr>
            @endforeach
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>