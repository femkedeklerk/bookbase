<?php

namespace App\Http\Requests\Book;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required', 'string'],
            'author' => ['required', 'string'],
            'genre' => ['required', 'string'],
            'teacher' => ['required', 'string', 'email'],
            'year' => ['required', 'string'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
