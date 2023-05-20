<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->count(10)->create();

        User::insert([
            [
                'name' => 'Test',
                'email' => 'test@test.com',
                'password' => bcrypt('password'),
                'created_at' => now(),
            ],
        ]);
    }
}
