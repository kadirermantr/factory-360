<?php

namespace Database\Factories;

use App\Enums\EmployeeGender;
use App\Enums\EmployeeStatus;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'firstname' => fake()->firstName,
            'lastname' => fake()->lastName,
            'position' => ucfirst(fake()->word),
            'gender' => fake()->randomElement(EmployeeGender::cases()),
            'status' => fake()->randomElement(EmployeeStatus::cases()),
            'company_id' => fake()->numberBetween(1, 5),
            'phone' => fake()->phoneNumber,
            'email' => fake()->unique()->safeEmail,
            'employment_date' => fake()->dateTimeBetween('-10 years'),
            'created_at' => now(),
        ];
    }
}
