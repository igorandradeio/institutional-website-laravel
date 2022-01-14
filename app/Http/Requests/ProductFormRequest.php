<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductFormRequest extends FormRequest
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
            'category_id' => 'required',
            'name' => [
                'required',
                'min:2',
                'max:100',
                Rule::unique('products')->ignore($id)->whereNull('deleted_at'),
            ],
            'image' => ['required', 'image'],
            'description' => 'required|min:2|max:1000'
        ];

        //image isn't required if the user doesn't upload a new image
        if ($this->method() == 'PUT') {
            $rules['image'] = ['nullable', 'image'];
        }

        return $rules;
    }
}
