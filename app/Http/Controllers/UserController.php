<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kategori;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{


        //View index
    public function tampil_halaman_utama(Request $request){

        return view('home/home');
  }

        //Login
      public function login(Request $request){

        $pesan = [

            'email.required' => 'Email harus diisi',
            'password.required' => 'Password harus diisi',

        ];


          $request -> validate([
              'email' => 'required',
              'password' => 'required',
          ],$pesan);

          if (Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            $request->session()->regenerate();

                if (Auth::user()->role == 'Masyarakat'){

                    return redirect()->intended('/pengaduanku');

                } elseif (Auth::user()->role == 'Admin'){

                    return redirect()->intended('/home-admin');
                }
            }else {
        return redirect()->back()->with('error','Maaf Email dan Password salah');
         }

    }

        //Register
      public function register(Request $request)
          {

              $pesan = [
                  'textNik.required' => 'Harus Diisi',
                  'textNik.unique' => 'Sudah terpakai',

                  'textNama.required' => 'Harus Diisi',

                  'textAlamat.required' => 'Harus Diisi',

                  'textEmail.required' => 'Harus Diisi',
                  'textEmail.unique' => 'Sudah terpakai',

                  'textPassword.required' => 'Harus Diisi',

                  'textNomorTelepon.required' => 'Harus Diisi',

                //   'textFoto.required' => 'Harus Diisi'




              ];

              //validasi

              $request->validate([
                  'textNik' => 'required|unique:users,nik',
                  'textNama' => 'required',
                  'textAlamat' => 'required',
                  'textEmail' => 'required|unique:users,email',
                  'textPassword' => 'required',
                  'textNomorTelepon' => 'required|unique:users,no_telepon',

              ],$pesan);


              $filenya = $request->file('profile');
            if($request->hasFile('profile')){
                // $extensiFile = $request->file('filepengaduan')->getClientOriginalExtension();
                $fileEkstensi   = $filenya->extension();
                $foto   = 'profileFoto'.Carbon::now()->format('dmYHis').'.'.$fileEkstensi;
                $filenya->move('profileFoto', $foto);
            } else {
                $foto = 'gambarProfile.jpg';
            }

              //proses simpan
              $dataUser = [
                  'nama' => $request->textNama,
                  'nik' => $request->textNik,
                  'alamat' => $request->textAlamat,
                  'email'=> $request->textEmail,
                  'foto'=> $foto,
                  'password' => bcrypt( value: $request->textPassword),
                  'no_telepon' => $request->textNomorTelepon,
                  'role' => 'Masyarakat',

              ];
              User::create($dataUser);

              return redirect('/signin');

          }

            //Logout
          public function logout(Request $request)
          {
              Auth::logout();
              $request->session()->invalidate();
              $request->session()->regenerate();

              return redirect('/');
          }

            //ViewPengaduan
          public function pengaduanku(){

            $datapengaduan = Pengaduan::with(['kategori','user'])->where('user_id', auth()->user()->id)->get();
                $title = "APM | Pengaduanku";
            return view('home.pengaduanku', compact('datapengaduan', 'title'));
        }

            //viewKategori
        public function formtambah(Request $request){
            $dataKategori = Kategori::all();
            return view('home.isipengaduan', compact('dataKategori'));


        }

            //Tambah Pengaduan
        public function tambah(Request $request)
        {


            $filenya = $request->file('filePengaduan');
            if($request->hasFile('filePengaduan')){
                // $extensiFile = $request->file('filepengaduan')->getClientOriginalExtension();
                $filename   = pathinfo($filenya, PATHINFO_FILENAME);
                $extensiFile    = $filenya->getClientOriginalExtension();
                $foto   = 'galery'.time().'.'.$extensiFile;
                $filenya->move('galery', $foto);
            } else {
                $foto = 'default.jpg';
            }

            $dataSimpan = [
                'user_id'  => auth()->user()->id,
                'judul'     => $request->judul,
                'kategori_id'     => $request->kategori_id,
                'isi_pengaduan'     => $request->isi_pengaduan,
                'foto'     => $foto
            ];
            Pengaduan::create($dataSimpan);

            return redirect('/pengaduanku');
        }

            //Detail
        public function detail(Request $request, $id){
            $data = [
                'dataDetail' => Pengaduan::with('kategori', 'user')->find($id),
                'id' => Auth::user()->id,
                'tanggapan' => Tanggapan::with('pengaduan', 'user')->where('pengaduan_id',$id)->get(),

            ];
            return view('home.detailPengaduan', $data);
        }

            //View Profil
        public function profile() {
            $liat = Auth::user();
            return view('home.profile', compact('liat'));
        }

            //View di edit profil
        public function view_profile() {
            $liat = Auth::user();
            return view('home.edit_profile', compact('liat'));
        }

            //edit profil
        public function edit_profile(Request $request) {

        $user = Auth::user();

        if ($request->hasFile('profile_foto')) {

            if($user->foto !== 'gambarProfile.jpg') {
                File::delete(public_path('profileFoto/' . $user->foto));
            }

            $filename = 'Profile' . time() . '.' . $request->file('profile_foto')->getClientOriginalExtension();
            $request->file('profile_foto')->move('profileFoto', $filename);
            $user->foto = $filename;
        }

            $user->update([
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'nik' => $request->nik,
                'no_telepon'=> $request->no_telepon
            ]);

            return redirect('/profile');
        }

        public function upComment (Request $request) {
            $user_id = Auth::user()->id;

            $validatedData = $request->validate([
                'tanggapan' => 'required',
                'pengaduan_id' => 'required',
            ]);
        }

            //Tanggapan
        public function tanggapan(Request $request) {
            $request -> validate([
                'id' => 'required',
                'pesan' => 'required'
            ]);
             $tanggapan = [
                'pengaduan_id' => $request->id,
                'users_id' => Auth::user()->id,
                'tanggapan' => $request->pesan,
             ];

        Tanggapan::create($tanggapan);
        return redirect()->back();
        }
}