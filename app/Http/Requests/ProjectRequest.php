<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'brief' => ['required', 'string', 'max:255'],
            'body' => ['required', 'string'],
            'is_published' => ['required', 'boolean'],
        ];
    }
}
