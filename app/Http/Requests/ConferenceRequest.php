<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConferenceRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'date' => ['required', 'date'],
            'address' => ['required', 'string', 'max:255'],
            'participant_count' => ['nullable', 'integer', 'min:0'],
            'city' => ['nullable', 'string', 'max:255'],
        ];
    }

    public function attributes(): array
    {
        return [
            'title' => __('messages.title'),
            'description' => __('messages.description'),
            'date' => __('messages.date'),
            'address' => __('messages.address'),
            'participant_count' => __('messages.participant_count'),
            'city' => __('messages.city'),
        ];
    }
}
