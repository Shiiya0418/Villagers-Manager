<?php

namespace App\Http\Requests\Manager;

use DateTime;
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

    public function getLiveEventInfo(): array
    {
        $today = new DateTime('now');
        $liveEventInfo = [
            'live_name' => $this->input('live-name', '新歓ライブ'),
            'event_date' => $this->input('event-date', $today),
        ];
        return $liveEventInfo;
    }
}
