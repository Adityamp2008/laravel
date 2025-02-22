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
    <form action="{{ route('admin.cabang.update', $cabang->id) }}" method="POST">
      @csrf
      @method('PATCH')

      <!-- Menyembunyikan id barang untuk pengiriman -->
      <input type="hidden" name="id" value="{{ $cabang->id }}">

      <!-- Nama Barang -->
      <div class="form-group">
        <label for="nama_barang">Nama cabang</label>
        <input type="text" class="form-control" name="nama_cabang" id="nama_cabang" value="{{ old('nama_cabang', $cabang->nama_cabang) }}" placeholder="Masukkan nama cabang" required>
      </div>

      <!-- Tanggal Datang -->
      <div class="form-group">
        <label for="tanggal_datang">alamat</label>
        <input type="text" class="form-control" name="alamat" id="alamat" value="{{ old('alamat', $cabang->alamat) }}" required>
      </div>
      <div class="form-group">
        <label for="tanggal_datang">pegawai</label>
        <input type="text" class="form-control" name="pegawai" id="pegawai" value="{{ old('pegawai', $cabang->pegawai) }}" required>
      </div>
      <div class="form-group">
        <label for="tanggal_datang">tanggal</label>
        <input type="date" class="form-control" name="tanggal" id="tanggal" value="{{ old('tanggal', $cabang->tanggal) }}" required>
      </div>
    
      <button type="submit" class="btn btn-primary">Update Barang</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
