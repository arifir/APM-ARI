@extends('admin.layout.layout')
@section('konten')

	<div class="wrapper">
		@include('admin.layout.sidebar')

		<div class="main">
			@include('admin.layout.navbar')

			<main class="content">
				<div class="container-fluid p-0">

            <h2 class="mb-4">Generate Laporan</h2>

            <form action="" method="">
                @csrf

                <div class="row mb-3">
                    <div class="col">
                    <label for="InputBu1" class="form-label">Bulan</label>
                      <input type="text" class="form-control" aria-label="First name" id="InputBu1">
                    </div>

                    <div class="col">
                        <label for="InputTahu2" class="form-label">Bulan</label>
                          <input type="text" class="form-control" aria-label="First name" id="InputTahu2">
                        </div>
                  </div>


                    <div class="row mb-3">
                        <div class="col">
                        <label for="InputTahu1" class="form-label">Tahun</label>
                          <input type="text" class="form-control" aria-label="First name" id="InputTahu1">
                        </div>
                        <div class="col">
                        <label for="InputTahu2" class="form-label">Tahun</label>
                          <input type="text" class="form-control" aria-label="First name" id="InputTahu2">
                        </div>

                  </div>

                  <div class="row mb-3">
                  <div class="col">
                    <label for="InputJK" class="form-label">Pilih Status</label>
                    <select class="form-select" aria-label="Default select example" id="InputJK">
                        <option selected>- All -</option>
                        <option value="1">Process</option>
                        <option value="2">Selesai</option>

                      </select>
                  </div>
                  </div>


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
