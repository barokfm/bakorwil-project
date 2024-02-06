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
                'email'=>'adminn@gmail.com',
                'role'=>'admin',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=>'Mas kepala',
                'email'=>'kepala@gmail.com',
                'role'=>'kepala',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=>'Mas sekertaris',
                'email'=>'sekertaris@gmail.com',
                'role'=>'sekretaris',
                'password'=>bcrypt('123456')

            ],
        ];
        foreach ($userData as $key => $val){
            User::create($val);
        }
        $this->call([
            PeminjamSeeder::class,
        ]);
    }
}
