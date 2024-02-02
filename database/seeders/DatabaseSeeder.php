<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       User::create ([
        'nama' => 'agus',
        'email' => 'agus@gmail.com',
        'password' => bcrypt('111'),
        'nik' => '11111111111145',
        'foto' => 'gambarProfile.jpg',
        'alamat' => 'ckw',
        'no_telepon' => '252243',
        'role' => 'Admin'
       ]);
    }
}