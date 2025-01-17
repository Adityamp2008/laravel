<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>tambahkan cabang</title>
  </head>
  <body>
    <h1>tambah cabang</h1>
      
<form  action="{{ route('admin.cabang.post')}}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label>nama cabang</label>
    <input type="text" class="form-control" name="nama_cabang" id="nama_cabang" placeholder="nama">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">alamat</label>
    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="alamat">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">pegawai</label>
    <input type="text" class="form-control" name="pegawai" id="pegawai" placeholder="tanggal">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">tanggal pembuatan</label>
    <input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="tanggal">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>