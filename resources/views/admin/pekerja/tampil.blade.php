<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>admin barang</title>
  </head>
  <body>
    <h1 style="text-align: center">Barang Barang</h1>
    <div class="shadow p-3 mb-5 bg-body rounded">
      <table class="table">
        <thead class="table-dark">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Pekerja</th>
              <th scope="col">Umur</th>
              <th scope="col">Gaji</th>
              <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
          <?php $nomor = 1; ?>
          @foreach ($pekerja as $item)
            <tr>
              <th scope="row">{{ $nomor++ }}</th>
              <td>{{ $item->nama_pekerja }}</td>
              <td>{{ $item->umur }}</td> 
              <td>{{ $item->gaji }}</td>
              <td>
                <a href="{{ route('admin.pekerja.edit', $item->id) }}"  class="btn btn-primary me-md-2" >edit</a>
                <a href="/admin/pekerja/tampil/delete/{{$item->id}}"  class="btn btn-primary me-md-2" >hapus</a>
              </td>
            </tr>
          @endforeach
          <a href="{{ asset('admin/pekerja/tambah')}}" >
        </tbody>
      </table>
        <button class="btn btn-success me-md-2" type="button">Tambah</button>
      </a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
