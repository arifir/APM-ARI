<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kategori;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
        //ViewIndex
    public function index(Request $request){

        // $liat = Auth::user();
        // $masyarakat = User::where('role','Masyarakat')->count();
        // $kategori = Kategori::all()->count();
        // $laporanNew = Pengaduan::where('status','New')->count();
        // // $laporan = Pengaduan::where('status','New')->count();
        // return view('admin.index', compact('masyarakat','kategori', 'laporanNew','liat'));

        $data = [
            'liat' => Auth::user(),
            'masyarakat' => User::where('role','Masyarakat')->count(),
            'kategori' => Kategori::all()->count(),
            'laporanNew' => Pengaduan::where('status','New')->count(),
            // $laporan = Pengaduan::where('status','New')->count();
        ];
            return view('admin.index', $data);
  }

    //ViewProfil
    public function viewProfile() {
        $liat = Auth::user();
        return view('admin.profile', compact('liat'));
    }

}