<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>tambahkan barang</title>
  </head>
  <body>
    <h1>tambah pekerja</h1>
      
<form  action="{{ route('admin.pekerja.post')}}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label>nama pekerja</label>
    <input type="text" class="form-control" name="nama_pekerja" id="nama_pekerja" placeholder="nama">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">umur pekerja</label>
    <input type="text" class="form-control" name="umur" id="umur" placeholder="tanggal">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">gaji</label>
    <input type="text" class="form-control" name="gaji" id="gaji" placeholder="tanggal">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>