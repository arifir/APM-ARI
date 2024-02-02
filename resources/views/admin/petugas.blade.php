@extends('admin.layout.layout')
@section('konten')

	<div class="wrapper">
		@include('admin.layout.sidebar')

		<div class="main">
			@include('admin.layout.navbar')

			<main class="content">
				<div class="container-fluid p-0">




                    <h2 class="mb-4">Data Petugas</h2>

                    <table class="table table-white table-striped">
                        <thead class="table table-dark">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nik</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Role</th>
                            <th scope="col">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>3207432143</td>
                            <td>Ari</td>
                            <td>Admin</td>
                            <td>
                                <a href="" class="btn btn-warning btn-sm"><i class="bi bi-pen"></i></a>
                                <a href="" class="btn btn-primary btn-sm"><i class="bi bi-list"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>3207432143</td>
                            <td>Yudi</td>
                            <td>Petugas</td>
                            <td>
                                <a href="" class="btn btn-warning btn-sm"><i class="bi bi-pen"></i></a>
                                <a href="" class="btn btn-primary btn-sm"><i class="bi bi-list"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>3207432143</td>
                            <td>Puji</td>
                            <td>Admin</td>
                            <td>
                                <a href="" class="btn btn-warning btn-sm"><i class="bi bi-pen"></i></a>
                                <a href="" class="btn btn-primary btn-sm"><i class="bi bi-list"></i></a>
                            </td>
                          </tr>



                        </tbody>
                      </table>

                        <div class="container">
                             <a href="/addPetugas-admin" class="form-control text-center rounded link-underline link-underline-opacity-0">+ Add Data Petugas</a>
                        </div>

				</div>
			</main>

			<footer class="footer">
				<div class="container-fluid">

				</div>
			</footer>
		</div>
	</div>
@endsection
