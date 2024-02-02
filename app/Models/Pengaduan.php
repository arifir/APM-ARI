<?php

namespace App\Models;

use App\Models\User;
use App\Models\Kategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pengaduan extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'user_id',
        'judul',
        'kategori_id',
        'isi_pengaduan',
        'foto',
        'status',

    ];

    protected $table='table_pengaduan';

    // Nilai balik relasi ke dalam tabel kategori

    public function kategori()
    {
        return $this->belongsTo(Kategori::class,'kategori_id','id');

    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function tanggapan()
    {

        return $this->hasMany(Pengaduan::class,'pengaduan_id','id');


    }

}