<?php

namespace Database\Seeders;

use App\Models\CompanyIndustries;
use App\Models\Industry;
use Illuminate\Database\Seeder;

class IndustrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Industry::insert([
            ['name' => 'Steel'],
            ['name' => 'Glass'],
            ['name' => 'Food'],
            ['name' => 'Building'],
            ['name' => 'Textile'],
        ]);

        CompanyIndustries::insert([
            [
                'company_id' => 1,
                'industry_id' => 1,
            ],
            [
                'company_id' => 1,
                'industry_id' => 2,
            ],
            [
                'company_id' => 2,
                'industry_id' => 1,
            ],
            [
                'company_id' => 2,
                'industry_id' => 3,
            ],
        ]);
    }
}
