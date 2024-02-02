@extends('admin.layout.layout')
@section('konten')

	<div class="wrapper">
		@include('admin.layout.sidebar')

		<div class="main">
			@include('admin.layout.navbar')

			<main class="content">
				<div class="container-fluid p-0">

            <h2 class="mb-4">Add Data Masyarakat</h2>

            <form action="" method="">
                @csrf

                <div class="row mb-3">
                    <div class="col">
                    <label for="InputNik" class="form-label">Nik</label>
                      <input type="text" class="form-control" aria-label="First name" id="InputNik">
                    </div>

                    <div class="col">
                        <label for="InputAlamat" class="form-label">Alamat</label>
                          <input type="text" class="form-control" aria-label="First name" id="InputAlamat">
                        </div>
                  </div>


                    <div class="row mb-3">
                        <div class="col">
                        <label for="InputEmail" class="form-label">Email</label>
                          <input type="email" class="form-control" aria-label="First name" id="InputEmail">
                        </div>
                    <div class="col">
                        <label for="InputJK" class="form-label">Jenis Kelamin</label>
                        <select class="form-select" aria-label="Default select example" id="InputJK">
                            <option selected>- Pilih Jenis Kelamin -</option>
                            <option value="1">Laki - Laki</option>
                            <option value="2">Perempuan</option>

                          </select>
                        </div>
                  </div>

                  <div class="row mb-3">
                    <div class="col">
                    <label for="InputNama" class="form-label">Nama</label>
                      <input type="text" class="form-control" aria-label="First name" id="InputNama">
                    </div>

                    <div class="col">
                        <label for="InputPass" class="form-label">Password</label>
                          <input type="password" class="form-control" aria-label="First name" id="InputPass">
                        </div>
                  </div>

                  <div class="row mb-3">
                    <div class="col-6">
                    <label for="InputNoTelp" class="form-label">No Telepon</label>
                      <input type="text" class="form-control" aria-label="First name" id="InputNoTelp">
                    </div>

                  </div>

                  <a href="/masyarakat-admin" class="btn btn-outline-warning">
                    <i class="bi bi-arrow-return-left"></i>
                    Kembali
                  </a>

                  <button type="submit" class="btn btn-outline-success">
                    <i class="bi bi-folder2"></i>
                    Simpan
                </button>

              </form>

				</div>
			</main>

			<footer class="footer">
				<div class="container-fluid">

				</div>
			</footer>
		</div>
	</div>
@endsection
