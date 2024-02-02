<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styleprofile.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
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



    <div class="container d-flex justify-content-center mt-5">
        <div class="card mb-3 kartu">
        <div class="row justify-content-center">
            <div class="col-md">
                {{-- <img src="img/4.png" class="img-fluid" alt="" height="1000px" width="500px"> --}}



                    <div class="cover-photo">
                        <img src="{{ asset('profileFoto/'.$liat->foto) }}" class="card-img-top" alt="">
                    </div>
            <div class="profile-info text-center">
                <img src="{{ asset('profileFoto/'.$liat->foto) }}" alt="" class="profile-picture rounded-circle">
            </div>
            <div class="card-body text-center">
              <h5 class="card-title">{{ $liat->nama }}</h5><br>
              <div class="text text-secondary">
              <p class="card-text">NIK : {{ $liat->nik }}</p>
              <p class="card-text">No telp : {{ $liat->no_telepon }}</p>
              <p class="card-text">Alamat : {{ $liat->alamat }}</p>

              {{-- <a href="/edit_profile" class="text text-secondary link-offset-2 link-underline link-underline-opacity-0 mx-1">
                <i class="bi bi-pencil"></i>
                Edit
            </a> --}}

            {{-- trigger modal --}}
            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="bi bi-pencil"></i>
                Edit
              </button>


            </div>
            </div>
          </div>

            </div>
        </div>
    </div>

    {{-- modal --}}
    <form action="/edit_prof" method="post" enctype="multipart/form-data">
        @csrf
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="bi bi-pencil btn btn-primary btn-sm me-2"></i>Edit Profil</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">


                        {{-- konten modal --}}
                    <div class="mb-3">
                      <label for="exampleInputNama" class="form-label">Nama</label>
                      <input type="text" class="form-control" name="nama" id="exampleInputNama" value="{{ $liat->nama }}">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputNik" class="form-label">Nik</label>
                      <input type="text" class="form-control" name="nik" id="exampleInputNik" value="{{ $liat->nik }}">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputNoTelp" class="form-label">No Telp</label>
                      <input type="text" class="form-control" name="no_telepon" id="exampleInputNoTelp" value="{{ $liat->no_telepon }}">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputAlamat" class="form-label">Alamat</label>
                      <input type="text" class="form-control" name="alamat" id="exampleInputAlamat" value="{{ $liat->alamat }}">
                    </div>

                      <div class="mb-3">
                        <label for="formFile" class="form-label">Lampirkan Foto</label>
                        <input class="form-control" name="profile_foto" type="file" id="formFile">
                      </div>




            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </div>
        </div>
      </div>
    </form>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
