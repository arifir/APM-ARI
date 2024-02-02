<?php

namespace App\Models;

use App\Models\Pengaduan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategori extends Model
{
    use HasFactory;
    protected $fillable = [

        'nama_kategori',
        'deskripsi',


        ];

        protected $table = 'Kategori';

        // Relasi ke dalam tabel pemgaduan 1 to many

        public function pengaduan()
        {

            return $this->hasMany(Pengaduan::class,'kategori_id','id');


        }
}