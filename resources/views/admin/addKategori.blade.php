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
                    <div class="col mb-3">
                    <label for="InputNik" class="form-label">Nik</label>
                      <input type="text" class="form-control" aria-label="First name" id="InputNik">
                    </div>

                    <div class="mb-3">
                        <label for="Deskripsi" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="Deskripsi" rows="3"></textarea>
                      </div>


                  </div>


                  <a href="/kategori-admin" class="btn btn-outline-warning">
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
