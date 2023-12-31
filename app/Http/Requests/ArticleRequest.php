<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'article' => 'required',
            'content' => 'required|min:10',
            'image' => 'required',
        ];
    }

    public function attributes(): array
    {
        return [
            'article' => 'статья',

        ];
    }

    public function messages(): array
    {
        return [
            'article.required' => 'Пожалуйста заполните имя статьи',
            'name.required' => 'Поле имя является обязательным',
            'content.required' => 'Поле тема сообщения является обязательным',
            'content.min' => 'В поле "Тема сообщения" должно быть минимум 10 символов',
            'image.required' => 'Поле "Изображение" является обязательным',
        ];
    }
}
