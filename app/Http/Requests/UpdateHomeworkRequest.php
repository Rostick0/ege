<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHomeworkRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        if (auth()?->user()->role === 'teacher') {
            return [
                'mark' => 'required|numeric|min:1|max:5',
                'answer' => 'nullable|max:255',
                'answer_file_id' => 'nullable|file',
            ];
        }

        return [
            'file' => 'required|file',
            'comment' => 'nullable|max:65536',
            'lesson_id' => 'required',
        ];
    }
}
