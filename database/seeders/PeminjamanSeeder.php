<?php

namespace Database\Seeders;

use App\Models\Peminjaman;
use Illuminate\Database\Seeder;

class PeminjamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Peminjaman::create([
            [
                'id_peminjam' => 1,
                'id_peralatan' => 1,
                'jumlah_peralatan' => 1,
            ]
        ]);
    }
}
