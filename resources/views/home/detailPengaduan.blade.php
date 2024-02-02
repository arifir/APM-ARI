<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styleprofile.css') }}">

    {{-- Profil bulat --}}
    <link rel="preconnect" href="https://fonts.gstatic.com" />

        <link rel="canonical" href="https://demo-basic.adminkit.io/pages-profile.html"/>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet"/>

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



<div class="container">

            <div class="mb-5 mt-5">
                <h1>Detail Pengaduan</h1>
                    <p><a href="/pengaduanku" class="text-decoration-none">Pengaduanku</a> / Index</p>
            </div>

    <div class="row d-flex">
        <div class="col-5">
        <img src="{{ asset('galery/'.$dataDetail->foto) }}" width="400" height="300" class="rounded me-5" alt="">
    </div>
    <div class="col-7">
        <div class="border border-secondary-subtle rounded">
            <h5 class="text-center my-3"><b>{{ $dataDetail->judul }}</b></h4>
                <hr>
                <div class="mx-5">
                        <p class="text-secondary"><b>Category : </b>{{ $dataDetail->kategori->nama_kategori }}</p>
                        <p>Tanggal Pengaduan : {{ $dataDetail->created_at->format('d M Y') }}</p>
                        <p>Status Pengaduan : {{ $dataDetail->status }}</p>
                </div>
                <hr>
                        <h5 class="mx-5">Deskripsi</h5>
                        <p class="mx-5">{{ $dataDetail->isi_pengaduan }}</p>
        </div>
    </div>
    </div>
</div>


<section id="tanggapan">
    <div class="card mx-5 my-5">
        <div class="card-header mb-3">
            <h3 class="text text-secondary">Tanggapan</h3>
        </div>


        <div class="card-body">
            <div class="row">
                @foreach ($tanggapan as $data )
                    <div class="col-md-12">
                    @if ($data->user_id == $id)

                    <div class="profile-info mt-2">
                        <img src="{{ asset('profileFoto/'.$dataDetail->user->foto) }}" alt="" class="profile-picture-sm rounded-circle">
                        <div class="text-profile-sm"><p>{{ $dataDetail->user->nama }}</p></div>
                    </div>

                    <div class="float-md-end mb-3 ml-5 bg">
                        <div class="col-md-12 col-lg-12 form-group bg-dark-subtle">
                            <p style="padding: 7px">{{ $data->tanggapan }}</p>
                            <p class="float-md-end">
                                {{ $data->created_at->format('H:i') }}
                            </p>
                        </div>
                    </div>

                    @else


                        <div class="profile-info mt-2">
                            <img src="{{ asset('profileFoto/'.$dataDetail->user->foto) }}" alt="" class="profile-picture-sm rounded-circle">
                            <div class="text-profile-sm"><p>{{ $dataDetail->user->nama }}</p></div>
                        </div>
                        <div class="float-md-start mb-3 ml-5 bg">
                        <div class="col-md-12 col-lg-12 form-group bg-dark-subtle rounded">
                            <p style="padding: 7px" >{{ $data->tanggapan }}</p>
                            <p class="float-md-start text-secondary">
                                {{ $data->created_at->format('H:i') }}
                            </p>
                        </div>
                    </div>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
        <div class="card-footer">
            <form action="/tambahTanggapan" method="post" enctype="multipart/form-data">
                @csrf
            <div class="col-11 d-flex ms-5 fixed">
                <div class="input-group my-1">
                    <input type="hidden" class="" placeholder="Reply" aria-label="Recipient's username" aria-describedby="button-addon2" name="id" value="{{$dataDetail->id}}">
                    <textarea class="form-control rounded" placeholder="kirim" name="pesan"></textarea>
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                        <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                        </svg>
                    </button>
                  </div>

              </div>

        </div>
        </form>
    </div>
</section>





    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="{{ asset('adminkit/src/js/app.js') }}"></script>
  </body>
</html>
