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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:5|max:30',
            'price' => 'required',
            'description' => 'required|min:5|max:30'
        ];
    }

    public function messages(){
        return [
            'required' => 'Il campo :attribute è richiesto',
            'min' => 'Il campo :attribute è troppo corto',
            'max' => 'Il campo :attribute è troppo lungo'
        ];
    }
}
