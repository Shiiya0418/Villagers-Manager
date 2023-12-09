<?php

namespace App\Http\Requests\Villager;

use Illuminate\Foundation\Http\FormRequest;

class BandCreateRequest extends FormRequest
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

    public function getBandInfo(): array
    {
        $bandInfo = [
            'live_event_id' => $this->input('live-event-id', '追いコン'),
            'band_name' => $this->input('band-name', '9th'),
            'members' => $this->input('members')
        ];
        return $bandInfo;
    }
}
