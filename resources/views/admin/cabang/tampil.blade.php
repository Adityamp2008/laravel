<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>admin cabang</title>
  </head>
  <body>
    <h1 style="text-align: center">nama cabang</h1>
    <div class="shadow p-3 mb-5 bg-body rounded">
      <table class="table">
        <thead class="table-dark">
            <tr>
              <th scope="col">no</th>
              <th scope="col">nama cabang</th>
              <th scope="col">alamat</th>
              <th scope="col">pegawai</th>
              <th scope="col">tanggal</th>
              <th scope="col">aksi</th>
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
              <td>
                <a href="{{ route('admin.cabang.edit', ['id' => $cabang->id]) }}" class="btn btn-primary">Edit</a>
                <a href="/admin/cabang/tampil/delete/{{$cabang->id}}" class="btn btn-primary">hapus</a>
              </td>
            </tr>
            @endforeach
            <a href="{{ asset('admin/cabang/tambah')}}" >
              <button class="btn btn-primary me-md-2" type="button">tambah</button>
            </a>
      </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
