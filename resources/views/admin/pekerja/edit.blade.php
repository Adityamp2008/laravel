<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Edit Barang</title>
  </head>
  <body>
    <h1>Edit pekerja</h1>
      
    <!-- Form untuk edit barang -->
    <form action="{{ route('admin.pekerja.update',$pekerja->id) }}" method="POST">
      @csrf
      @method('PATCH')
      

      <!-- Menyembunyikan id barang untuk pengiriman -->
      <input type="hidden" name="id" value="{{ $pekerja->id }}">

      <!-- Nama Barang -->
      <div class="form-group">
        <label for="nama_pekerja">Nama pekerja</label>
        <input type="text" class="form-control" name="nama_pekerja" id="nama_pekerja" value="{{ $pekerja->nama_pekerja}}" placeholder="Masukkan nama barang" required>
      </div>

      <!-- Tanggal Datang -->
      <div class="form-group">
        <label for="umur">umur</label>
        <input type="text" class="form-control" name="umur" id="umur" value="{{  $pekerja->umur }}" required>
      </div>

      <div class="form-group">
        <label for="gaji">gajihhh</label>
        <input type="number" class="form-control" name="gaji" id="gaji" value="{{  $pekerja->gaji }}" required>
      </div>


      <!-- Tombol Submit -->
      <button type="submit" class="btn btn-primary">Update pekerja</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
