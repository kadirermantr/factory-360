<?php

namespace App\Http\Requests;

use App\Enums\EmployeeGender;
use App\Enums\EmployeeStatus;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Enum;

class EmployeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'firstname' => 'required|alpha|min:2',
            'lastname' => 'required|alpha|min:2',
            'position' => 'nullable',
            'company_id' => 'required|exists:companies,id',
            'gender' => ['nullable', new Enum(EmployeeGender::class)],
            'status' => ['nullable', new Enum(EmployeeStatus::class)],
            'phone' => 'nullable|numeric',
            'email' => ['required', 'email', Rule::unique('employees')->ignore($this->employee)],
            'employment_date' => 'required|date:Y-m-d',
        ];
    }
}
