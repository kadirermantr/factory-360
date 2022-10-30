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
            ['name' => 'Building'],
            ['name' => 'Steel'],
            ['name' => 'Commerce'],
            ['name' => 'Food'],
            ['name' => 'Glass'],
            ['name' => 'Hotels'],
            ['name' => 'Media'],
            ['name' => 'Technology'],
            ['name' => 'Textile'],
            ['name' => 'Transport'],
        ]);

        CompanyIndustries::insert([
            ['company_id' => 1, 'industry_id' => 3],
            ['company_id' => 1, 'industry_id' => 7],
            ['company_id' => 1, 'industry_id' => 8],
            ['company_id' => 2, 'industry_id' => 3],
            ['company_id' => 2, 'industry_id' => 7],
            ['company_id' => 2, 'industry_id' => 8],
            ['company_id' => 3, 'industry_id' => 4],
            ['company_id' => 4, 'industry_id' => 9],
            ['company_id' => 5, 'industry_id' => 5],
        ]);
    }
}
