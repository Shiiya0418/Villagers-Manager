<?php

namespace App\Http\Requests\Villager;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
        ];
    }

    public function getVillagerInfo(): array
    {
        $villagerInfo = [
            'student_number' => $this->input('student-number', 1234525001),
            'name' => $this->input('name', 'フォーク村'),
            'year' => $this->input('year', 6),
            'nickname1' => $this->input('nickname1', 'F村'),
            'nickname2' => $this->input('nickname2', $this->input('nickname1')),
            'main_instrument' => $this->input('main-instrument', 'guitar'),
            'sub_instrument' => $this->input('sub-instrument', 'keyboard'),
            'role' => $this->input('role')
        ];
        return $villagerInfo;
    }
}
