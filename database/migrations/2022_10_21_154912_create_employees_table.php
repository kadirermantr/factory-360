<?php

use App\Enums\EmployeeStatus;
use App\Models\Company;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('position')->nullable();
            $table->string('gender')->nullable();
            $table->string('status')->default((EmployeeStatus::INVITED)->name);
            $table->foreignIdFor(Company::class);
            $table->string('phone')->unique()->nullable();
            $table->string('email')->unique();
            $table->date('employment_date')->default(now());
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
