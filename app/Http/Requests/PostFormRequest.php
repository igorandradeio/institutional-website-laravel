<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:2|max:100',
            'image' => ['required', 'image'],
            'content' => 'required|min:2|max:50000'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The title field is required.',
            'name.image' => 'The image field is required.',
            'name.content' => 'The content field is required.',
        ];
    }
}
