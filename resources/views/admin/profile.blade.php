@extends('admin.layout.layout')
@section('konten')

	<div class="wrapper">
		@include('admin.layout.sidebar')

		<div class="main">
			@include('admin.layout.navbar')

			<main class="content">

				<div class="container">
                    <div class="row d-flex">
                        <div class="col-5">
                    <h3>{{ $liat->nama }}</h3><hr>
                    <p>NIK : {{ $liat->nik }}</p>
                    <p>Alamat : {{ $liat->alamat }}</p>
                    <p>No Telp : {{ $liat->no_telepon }}</p>
                    <p>Email : {{ $liat->email }}</p>
                    <p>Role : {{ $liat->role }}</p>
                        </div>
                        <div class="col-7">
                    <div class="profile-info-2 text-center">
                        <img src="{{ asset('profileFoto/'.$liat->foto) }}" alt="" class="profile-picture-2 rounded-circle">

                    </div>
                </div>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="bi bi-pen"></i>
                    Edit Profil
                  </button>

                  <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <p>content</p>

                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                    </div>
                </div>


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
