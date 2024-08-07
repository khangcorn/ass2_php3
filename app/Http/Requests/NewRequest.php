<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewRequest extends FormRequest
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
            'news.title' => 'required',
            'news.content' => 'required|min:100',
            'news.categories_id' => 'required|integer',
            'news.thumbnail' => [
                'required',
                'image',
                'mimes:jpeg,png',
                'mimetypes:image/jpeg,image/png',
                'max:2048',
            ],
        ];
    }
    public function attributes()
    {
        return [
            'news.title' => 'news title',
            'news.content' => 'news content',
            'news.categories_id' => 'news categories_id',
            'news.thumbnail'=> 'news thumbnail',
        ];
    }
}
