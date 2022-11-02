<?php

namespace Database\Seeders;

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
    }
}
