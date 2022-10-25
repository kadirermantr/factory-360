<?php

namespace Database\Seeders;

use App\Enums\EmployeeGenders;
use App\Enums\EmployeeStatus;
use App\Models\Employee;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = now();

        Employee::insert([
            [
                'firstname' => 'Ahmet',
                'lastname' => 'Yılmaz',
                'position' => 'Developer',
                'gender' => EmployeeGenders::MALE,
                'status' => EmployeeStatus::INVITED,
                'company_id' => 1,
                'phone' => '05554443322',
                'email' => 'ornek1@gmail.com',
                'employment_date' => '2022-10-24',
                'created_at' => $date,
            ],
            [
                'firstname' => 'Ebru',
                'lastname' => 'Yücedağ',
                'position' => 'Designer',
                'gender' => EmployeeGenders::FEMALE,
                'status' => EmployeeStatus::PASSIVE,
                'company_id' => 2,
                'phone' => '05554443323',
                'email' => 'ornek2@gmail.com',
                'employment_date' => '2022-09-05',
                'created_at' => $date,
            ],
            [
                'firstname' => 'Umut',
                'lastname' => 'Yıldırım',
                'position' => 'Human Resources',
                'gender' => EmployeeGenders::FEMALE,
                'status' => EmployeeStatus::ACTIVE,
                'company_id' => 1,
                'phone' => '05554443324',
                'email' => 'ornek3@gmail.com',
                'employment_date' => '2022-08-03',
                'created_at' => $date,
            ],
        ]);
    }
}
