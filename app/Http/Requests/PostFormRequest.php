<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
        $id = $this->id;

        $rules = [
            'title' => [
                'required',
                'min:2',
                'max:100',
                Rule::unique('posts')->ignore($id)->whereNull('deleted_at'),
            ],
            'image' => ['required', 'image'],
            'content' => 'required|min:2|max:50000'
        ];

        //image isn't required if the user doesn't upload a new image
        if ($this->method() == 'PUT') {
            $rules['image'] = ['nullable', 'image'];
        }

        return $rules;
    }

    //custom error messages
    /*
    public function messages()
    {

        return [
            'name.required' => 'The title field is required.',
            'name.image' => 'The image field is required.',
            'name.content' => 'The content field is required.',
        ];
    }
    */
}
