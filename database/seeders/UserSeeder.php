<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'nama' => '',
            'username' => 'aufar',
            'email' => '',
            'password' => password_hash('admin', PASSWORD_BCRYPT),
            'tgl_lahir' => null,
            'alamat' => '',
            'jenjang' => '',
            'institusi' => '',
        ];

        User::create($data);

    }
}
