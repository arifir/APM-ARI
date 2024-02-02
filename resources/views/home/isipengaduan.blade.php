


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Isi Pengaduan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>


  <!-- As a heading -->
  <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
      <span class="navbar-brand text-secondary mb-2 mx-5 h1 mt-2">APM</span>

      <ul class="nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link text-secondary mx-5" aria-current="page" href="/pengaduanku">Pengaduanku</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-secondary mx-3" href="/isiTambah">Buat Pengaduan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-secondary mx-5" href="/profile">Profile</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-outline-info  mx-5" href="/logout">Sign out</a>
        </li>

      </ul>

    </div>
  </nav>


<form action="/isi" method="post"></form>
  <div class="container mt-5">
    <div class="mb-5">
        <h1>Buat Pengaduan</h1>
    <p><a href="/pengaduanku" class="text-decoration-none">Pengaduanku</a> / Index</p>
    </div>


    <form action="/isi" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="exampleInputJudul" class="form-label">Judul Pengaduan</label>
          <input type="text" class="form-control" name="judul" id="exampleInputJudul">
        </div>
        <div class="mb-3">
        <select class="form-select text-secondary" aria-label="Default select example" name="kategori_id">
            <option selected>- Pilih Kategori Pengaduan-</option>
            @foreach ($dataKategori as $dk)
            <option value="{{ $dk->id }}">{{ $dk->nama_kategori }}</option>
            @endforeach
          </select>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Isi Pengaduan</label>
            <textarea name="isi_pengaduan" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Lampirkan Foto</label>
            <input class="form-control" name="filePengaduan" type="file" id="formFile">
          </div>
        <button type="submit" class="btn btn-success">Kirim</button>
      </form>



</div>










    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
