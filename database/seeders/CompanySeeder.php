<?php

namespace Database\Seeders;

use App\Models\Company;
use DB;
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
                'name' => 'Dominos',
                'user_id' => 1,
                'created_at' => $date,
            ],
            [
                'name' => 'Trendyol',
                'user_id' => 2,
                'created_at' => $date,
            ],
        ]);
    }
}
