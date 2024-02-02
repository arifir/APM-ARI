


  <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>


  <!-- Navbar -->
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





    {{-- isi --}}
<div class="container mt-5">
    <div class="mb-5">
        <h1>Pengaduanku</h1>
    <p><a href="/pengaduanku" class="text-decoration-none">Pengaduanku</a> / Index</p>
    </div>
    <div class="table-responsive">
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Judul Pengaduan</th>
            <th scope="col">Kategori</th>
            <th scope="col">Status</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>

          @foreach ($datapengaduan as $data )

          <tr>
              <th scope="row">{{ $loop->iteration}}</th>
                  <td>{{ $data->judul }}</td>
                  <td>{{ $data->kategori->nama_kategori}}</td>
                  <td>{{ $data->status}}</td>
                  <td>
                    <a href="/detail/{{ $data->id }}" class="btn btn-primary btn-sm">Detail</a>
                  </td>
                  <td></td>




          </tr>
          @endforeach

        </tbody>
      </table>
    </div>
</div>





    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
