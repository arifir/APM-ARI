<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>

    <style>
        .bg {
            background-image: url('{{ asset("img/registration-bg.png") }}');
            background-size: 1800px;
        }
    </style>


      <div class="card bg px-5 bg-light ">
        <div class="row py-5">
      <div class="card md-4 col-lg-5 col-md-5 text-bg-light mb-3 mx-5 my-5" style=" max-width: ;">
        <div class="card-body">

            <h3 class="mt-3">Register</h3>
            <p class="mb-5">langkah yang diperlukan</p>

            <form action="/register" method="post" enctype="multipart/form-data">
                @csrf
                <div class="">
                  <label for="textNama" class="form-label">Nama</label>
                  @error('textNama')
                  <small class="text-danger">{{$message}}</small>
                  @enderror
                  <input type="text" name="textNama" class="form-control" id="textNama" value="{{ old('textNama') }}">
                </div>
                <div class="form form-group mt-3 mb-3">
                    <label for="selectJenisKelamin">Jenis Kelamin</label>
                    <select name="selectJenisKelamin" class="form form-control">
                      <option value="Laki-laki">Laki-laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                <div class="mb-3">
                    <label for="textNik" class="form-label">Nik</label>
                    @error('textNik')
                  <small class="text-danger">{{$message}}</small>
                  @enderror
                    <input type="text" name="textNik" class="form-control" id="textNik" value="{{ old('textNik') }}" minlength="16" maxlength="16">
                  </div>
                <div class="mb-3">
                  <label for="textAlamat" class="form-label">Alamat</label>
                  @error('textAlamat')
                  <small class="text-danger">{{$message}}</small>
                  @enderror
                  <input type="text" name="textAlamat" class="form-control" id="textAlamat" value="{{ old('textAlamat') }}">
                </div>
                <div class="mb-3">
                  <label for="textNomorTelepon" class="form-label">No Telepon</label>
                  @error('textNomorTelepon')
                  <small class="text-danger">{{$message}}</small>
                  @enderror
                  <input type="text" name="textNomorTelepon" class="form-control" id="textNomorTelepon" value="{{ old('textNomorTelepon') }}" minlength="12" maxlength="12">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Lampirkan Foto</label>
                    @error('textFoto')
                  <small class="text-danger">{{$message}}</small>
                  @enderror
                    <input class="form-control" name="profile" type="file" id="formFile">
                  </div>
                <div class="row g-3">
                    <div class="col">
                      <input type="email" name="textEmail" class="form-control" placeholder="Email" value="{{ old('textEmail') }}">
                      @error('textEmail')
                  <small class="text-danger mx-2">{{$message}}</small>
                  @enderror
                    </div>
                    <div class="col">
                          <input type="password" name="textPassword" class="form-control" placeholder="Password" value="{{ old('textPassword') }}" minlength="8" maxlength="8">
                          @error('textPassword')
                  <small class="text-danger mx-2">{{$message}}</small>
                  @enderror
                    </div>
                  </div>

                <div class="d-grid gap-2 mt-5">
                    <button class="btn btn-primary" type="submit">Register</button>
                </div>

                <p class="mt-3 text-center">already have an account? <a href="/signin">login</a></p>
              </form>

        </div>
      </div>
      <div class="md-5 col-lg-5 col-md-5 mt-5" style=" max-width: ;">
        <div class="mb-5"></div>
                <div class="py-5"></div>
            <h3 class="mt-5 mx-5">Suara Masyarakat, Langsung Diakui! Bergabunglah di Aplikasi Pengaduan Kami</h3>

      </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
