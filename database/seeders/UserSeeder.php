<?php

namespace Database\Seeders;

use App\Models\User;
use Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = Hash::make('p@ssw0rd');
        $date = now();

        User::insert([
            [
                'name' => 'Girift Tech',
                'email' => 'hr@girift.tech',
                'password' => $password,
                'created_at' => $date,
            ],
            [
                'name' => 'Yasin Baran',
                'email' => 'yasinbaran@girift.tech',
                'password' => $password,
                'created_at' => $date,
            ],
            [
                'name' => 'Kadir Erman',
                'email' => 'hello@kadirerman.com',
                'password' => $password,
                'created_at' => $date,
            ],
        ]);
    }
}
