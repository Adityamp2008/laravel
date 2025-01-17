<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Edit Barang</title>
  </head>
  <body>
    <h1>Edit Barang</h1>
      
    <!-- Form untuk edit barang -->
    <form action="{{ route('admin.barang.tampil') }}"method="POST">
      @csrf
<!-- Menambahkan method PATCH untuk update -->

      <!-- Menyembunyikan id barang untuk pengiriman -->
      <input type="hidden" name="id" value="{{ $uang->id }}">

      <!-- Nama Barang -->
      <div class="form-group">
        <label for="nama_barang">masuk</label>
        <input type="text" class="form-control" name="nama_barang" id="nama_barang" value="{{ $barang->masuk}}" placeholder="Masukkan nama barang" required>
      </div>

      <!-- Tanggal Datang -->
      <div class="form-group">
        <label for="tanggal_datang">keluar</label>
        <input type="date" class="form-control" name="tanggal_datang" id="tanggal_datang" value="{{  $barang->keluar }}" required>
      </div>

      <!-- Jenis Barang -->
      <div class="form-group">
        <label for="jenis">Jenis Barang</label>
        <select class="form-select" name="jenis" id="jenis" required>
          <option value="padat" {{ $barang->jenis}}>Padat</option>
          <option value="cair" {{ $barang->jenis}}>Cair</option>
        </select>
      </div>

      <!-- Tombol Submit -->
      <button type="submit" class="btn btn-primary">Update Barang</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
