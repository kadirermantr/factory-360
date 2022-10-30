<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = now();

        Company::insert([
            [
                'name' => 'Hepsiburada',
                'user_id' => 1,
                'created_at' => $date,
            ],
            [
                'name' => 'Trendyol',
                'user_id' => 2,
                'created_at' => $date,
            ],
            [
                'name' => 'Burger King',
                'user_id' => 3,
                'created_at' => $date,
            ],
            [
                'name' => 'Koton',
                'user_id' => 1,
                'created_at' => $date,
            ],
            [
                'name' => 'Paşabahçe',
                'user_id' => 2,
                'created_at' => $date,
            ],
        ]);
    }
}
