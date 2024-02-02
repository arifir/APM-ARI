<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    use HasFactory;
    protected $fillable = [
        'users_id',
        'pengaduan_id',
        'tanggapan',
    ];

    protected $table = 'tanggapan';


    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function pengaduan()
    {

        return $this->belongsTo(Pengaduan::class,'pengaduan_id','id');


    }

}