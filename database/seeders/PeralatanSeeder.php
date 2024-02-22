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
                'gedung_id' => 1,
                'nama' => 'Kursi Varnekel',
                'harga' => 1500,
                'jumlah' => 90
            ],
            [
                'gedung_id' => 1,
                'nama' => 'AC',
                'harga' => 350000,
                'jumlah' => 8
            ],
            [
                'gedung_id' => 2,
                'nama' => 'Kursi',
                'harga' => 1500,
                'jumlah' => 100
            ],
            [
                'gedung_id' => 2,
                'nama' => 'AC',
                'harga' => 350000,
                'jumlah' => 5
            ],
        ];

        foreach($alats as $alat){
            Peralatan::create($alat);
        }
    }
}
