<?php

namespace App\Models;

use App\Enums\EmployeeGender;
use App\Enums\EmployeeStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employee extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'company_id',
        'position',
        'gender',
        'status',
        'email',
        'employment_date',
    ];

    protected $casts = [
        'gender' => EmployeeGender::class,
        'status' => EmployeeStatus::class,
    ];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}
