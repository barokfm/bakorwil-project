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
        // \App\Models\User::factory(10)->create();

        $userData = [
            [
                'name'=>'Mas Admin',
                'email'=>'admin@gmail.com',
                'role'=>'admin',
                'avatar' => 'avatar/RFZX3F4JBRIsdr5dVwbaw9lcuYJQirA4TSkIZ6Y8.png',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=>'Mas kepala',
                'email'=>'kepala@gmail.com',
                'role'=>'kepala',
                'avatar' => 'avatar/snG0Q84140gZ5qq3RhY4SSFH6rgqW9M2WdHQSxGN.png',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=>'Mas sekertaris',
                'email'=>'sekertaris@gmail.com',
                'role'=>'sekretaris',
                'avatar' => 'avatar/Ln42gl4TUr3TRuKznFSJNPGZNCxMQhh8H3F8S8BV.png',
                'password'=>bcrypt('123456')

            ],
        ];
        foreach ($userData as $val){
            User::create($val);
        }
        $this->call([
            PeminjamSeeder::class,
            // PeralatanSeeder::class
        ]);
        // \App\Models\Peminjam::factory(2)->create();
    }
}
