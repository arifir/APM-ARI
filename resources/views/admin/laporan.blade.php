@extends('admin.layout.layout')
@section('konten')

	<div class="wrapper">
		@include('admin.layout.sidebar')

		<div class="main">
			@include('admin.layout.navbar')

			<main class="content">
				<div class="container-fluid p-0">

            <h2 class="mb-4">Data Laporan</h2>

            <form action="" method="">
                @csrf

                    <div class="row mb-3">

                    <div class="col">
                        <label for="InputStatus" class="form-label">Input Berdasarkan Status</label>
                        <select class="form-select" aria-label="Default select example" id="InputStatus">
                            <option selected>- Pilih Status -</option>
                            <option value="1">New</option>
                            <option value="2">Process</option>
                            <option value="3">Selesai</option>
                            <option value="4">Ditolak</option>

                          </select>
                        </div>

                    <div class="col">
                        <label for="InputKat" class="form-label">Filter Berdasarkan Kategori</label>
                        <select class="form-select" aria-label="Default select example" id="InputKat">
                            <option selected>- Pilih Kategori -</option>
                            <option value="1">Infrastruktur</option>
                            <option value="2">Kriminalitas</option>

                          </select>
                        </div>
                  </div>


                  <table class="table table-white table-striped">
                    <thead class="table table-dark">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tgl Pengaduan</th>
                        <th scope="col">Nama Pengadu</th>
                        <th scope="col">Katgeori</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>12 12 2022</td>
                        <td>Ari</td>
                        <td>Infrastuktur</td>
                        <td>Admin</td>
                        <td>
                            <a href="" class="btn btn-warning btn-sm"><i class="bi bi-pen"></i></a>
                            <a href="" class="btn btn-primary btn-sm"><i class="bi bi-list"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>12 12 2022</td>
                        <td>Ari</td>
                        <td>Infrastuktur</td>
                        <td>Admin</td>
                        <td>
                            <a href="" class="btn btn-warning btn-sm"><i class="bi bi-pen"></i></a>
                            <a href="" class="btn btn-primary btn-sm"><i class="bi bi-list"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>12 12 2022</td>
                        <td>Ari</td>
                        <td>Infrastuktur</td>
                        <td>Admin</td>
                        <td>
                            <a href="" class="btn btn-warning btn-sm"><i class="bi bi-pen"></i></a>
                            <a href="" class="btn btn-primary btn-sm"><i class="bi bi-list"></i></a>
                        </td>
                      </tr>

                    </tbody>
                  </table>

                    <div class="container">
                         <a href="/addMasyarakat-admin" class="form-control text-center rounded link-underline link-underline-opacity-0">+ Add Data Laporan</a>
                    </div>


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
