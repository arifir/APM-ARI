<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>

    <style>
        .bg {
            background-image: url('{{ asset("img/video-area-bg.png") }}');
            background-size: 1800px;
        }
    </style>

<div>
      <div class="card bg px-5 bg-light">
        <div class="row py-5">
      <div class="card md-4 col-lg-5 col-md-5 text-bg-light mb-3 mx-5 my-5" style=" max-width: ;">
        <div class="card-body">

            <h3 class="mt-3">Login</h3>
            <p class="mb-5">login dan buatlah pengaduan anda</p>

            <form action="/login" method="post">
                @csrf
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" name="email" class="form-control" id="email"><br>
                  @error('email')
                  <small class="alert alert-danger">{{$message}}</small>
                  @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password"><br>
                    @error('password')
                    <small class="alert alert-danger">{{$message}}</small>
                    @enderror

                    @if (session('error'))
                   <small class="alert alert-danger">{{session('error')}}</small>
                   @endif
                  </div>


                <div class="d-grid gap-2 mt-5">
                    <button class="btn btn-primary" type="submit">Login</button>
                </div>

                <p class="mt-3 text-center">Don't have account? <a href="/regis">Register</a></p>
              </form>

        </div>
      </div>
      <div class="md-5 col-lg-5 col-md-5 mt-5" style=" max-width: ;">
    <div class="mb-5"></div>
                <div class="py-5"></div>
            <h3 class="mt-3 mx-5">Satukan Suara, Wujudkan Perubahan Login dan Berpartisipasi, Aplikasi Pengaduan Masyarakat Masa Depan</h3>

      </div>
    </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
