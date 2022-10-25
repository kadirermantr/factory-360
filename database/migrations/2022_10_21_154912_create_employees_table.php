<?php

use App\Enums\EmployeeGenders;
use App\Enums\EmployeeStatus;
use App\Models\Company;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('position')->nullable();
            $table->enum('gender', EmployeeGenders::values())->nullable();
            $table->enum('status', EmployeeStatus::values())->default(EmployeeStatus::INVITED());
            $table->foreignIdFor(Company::class);
            $table->string('phone')->unique()->nullable();
            $table->string('email')->unique();
            $table->date('employment_date')->default(now());
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
