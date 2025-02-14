<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Edit keuangan</title>
  </head>
  <body>
    <h1>Edit keuangan</h1>
      
    <!-- Form untuk edit keuangan -->
    <form action="{{ route('admin.keuangan.post') }}"method="POST">
      @csrf

      <input type="hidden" name="id" value="{{ $uang->id }}">


      <div class="form-group">
        <label for="nama_keuangan">masuk</label>
        <input type="text" class="form-control" name="nama_keuangan" id="nama_keuangan" value="{{ $keuangan->masuk}}" placeholder="Masukkan nama keuangan" required>
      </div>


      <div class="form-group">
        <label for="tanggal_datang">keluar</label>
        <input type="date" class="form-control" name="tanggal_datang" id="tanggal_datang" value="{{  $keuangan->keluar }}" required>
      </div>

      <!-- Tombol Submit -->
      <button type="submit" class="btn btn-primary">Update keuangan</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
