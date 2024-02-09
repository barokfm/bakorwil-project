<?php

namespace Database\Seeders;

use App\Models\Peminjam;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PeminjamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Peminjam::create([
            'nama_peminjam' => 'Ahmad Hamdani',
            'alamat' => 'Pragaan Sumenep',
            'email' => 'hamdani@gmail.com',
            'no_hp' => '087623562322',
            'no_ktp' => '35988763423423',
            'foto_ktp' => md5('contoh.jpg'),
            'agenda' => 'Seminar',
            'tgl_acara' => date('Y-m-d'),
            'waktu' => date('H:i:s'),
            'sound_system' => 'ya',
            'kursi' => 100,
            'area' => 'tidak',
            'ac' => 8
        ]);
    }
}
