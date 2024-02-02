@extends('admin.layout.layout')
@section('konten')

	<div class="wrapper">
		@include('admin.layout.sidebar')

		<div class="main">
			@include('admin.layout.navbar')

			<main class="content">
				<div class="container-fluid p-0">


					<div class="row">
						<div class="col-xl-12 col-xxl-12 d-flex">
							<div class="w-100">
								<div class="row">

									<div class="col-sm-6">

										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Masyarakat</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="bi bi-person" data-feather=""></i>
														</div>
													</div>
												</div>

												<h1 class="mt-1 mb-3">{{ $masyarakat }}</h1>

											</div>
										</div>


										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Kategori</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="bi bi-journal" data-feather=""></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3">{{ $kategori }}</h1>

											</div>
										</div>

									</div>
									<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Laporan</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="bi bi-chat-square-dots" data-feather=""></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3">0</h1>

											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Laporan Baru</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="bi bi-envelope" data-feather=""></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3">{{ $laporanNew }}</h1>

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>


					</div>


                    <table class="table table-white table-striped">
                        <thead class="table table-dark">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tgl Pengaduan</th>
                            <th scope="col">Judul Pengaduan</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>12-12-2022</td>
                            <td>Sampah Berserakan</td>
                            <td>Pencemaran</td>
                            <td><a href="" class="btn btn-primary btn-sm"><i class="bi bi-list"></i></a></td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>12-12-2022</td>
                            <td>Sampah Berserakan</td>
                            <td>Pencemaran</td>
                            <td><a href="" class="btn btn-primary btn-sm"><i class="bi bi-list"></i></a></td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>12-12-2022</td>
                            <td>Sampah Berserakan</td>
                            <td>Pencemaran</td>
                            <td><a href="" class="btn btn-primary btn-sm"><i class="bi bi-list"></i></a></td>
                          </tr>

                        </tbody>
                      </table>


				</div>
			</main>

			<footer class="footer">
				<div class="container-fluid">

				</div>
			</footer>
		</div>
	</div>
@endsection
