<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/regis', function () {
    return view('home/register');
});

Route::get('/signin', function () {
    return view('home/login');
});

Route::get('/pengaduanku', function () {
    return view('home/pengaduanku');
});


Route::get('/',  [UserController::class, 'tampil_halaman_utama']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/register', [UserController::class, 'register']);


    //Masyarakat
Route::middleware(['masyarakat'])->group(function(){

    Route::get('/pengaduanku', [UserController::class, 'pengaduanku']);

    Route::get('/buatpengaduan', function () {
        return view('user-add-pengaduan');
    });

    Route::get('/detai pengaduan', function () {
        return view('user-detail-pengaduanku');
    });

    Route::get('/profile', [UserController::class, 'profile']);

    Route::get('/detail/{id}', [UserController::class, 'detail']);

    Route::get('/isiTambah', [UserController::class, 'formtambah']);

    Route::post('/isi', [UserController::class, 'tambah']);

    Route::get('/edit_profile', [UserController::class, 'view_profile']);

    Route::post('/edit_prof', [UserController::class, 'edit_profile']);

    Route::post('/tambahTanggapan', [UserController::class, 'tanggapan']);

});

Route::get('/logout', [UserController::class, 'logout']);


// Admin
Route::middleware(['admin'])->group(function(){

Route::get('/home-admin', [AdminController::class, 'index']);

Route::get('/masyarakat-admin', function () {
    return view('admin.masyarakat');
});

Route::get('/addMasyarakat-admin', function () {
    return view('admin.addMasyarakat');
});

Route::get('/petugas-admin', function () {
    return view('admin.petugas');
});

Route::get('/addPetugas-admin', function () {
    return view('admin.addPetugas');
});

Route::get('/kategori-admin', function () {
    return view('admin.kategori');
});

Route::get('/addKategori-admin', function () {
    return view('admin.addKategori');
});

Route::get('/laporan-admin', function () {
    return view('admin.laporan');
});

Route::get('/generate-admin', function () {
    return view('admin.generateLaporan');
});

Route::get('/profile-admin', [AdminController::class, 'viewProfile']);

});