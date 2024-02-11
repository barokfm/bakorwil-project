<?php

namespace Database\Seeders;

use App\Models\Peralatan;
use Illuminate\Database\Seeder;

class PeralatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $alats = [
            [
                'nama' => 'Gedung Pertemuan',
                'harga' => 3500000,
                'jumlah' => 1
            ],
            [
                'nama' => 'Sound System',
                'harga' => 500000,
                'jumlah' => 1,
            ],
            [
                'nama' => 'Area',
                'harga' => 10000,
                'jumlah' => 1
            ],
            [
                'nama' => 'Kursi',
                'harga' => 150,
                'jumlah' => 150
            ],
            [
                'nama' => 'AC',
                'harga' => 350000,
                'jumlah' => 8
            ]
        ];

        foreach($alats as $alat){
            Peralatan::create($alat);
        }
    }
}
