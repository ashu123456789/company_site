<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobRequest extends FormRequest
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
            'slug' => 'required|unique:pages,slug',
            'title' => 'required',
            'description' => 'required',
            'salary' => 'required',
            'location' => 'required',
            'experience' => 'required',
            'qualification' => 'required',
            'skills' => 'required',
            'opening' => 'required',
            'responsivity' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'slug.required' => 'The slug is required',
            'title.required' => 'The title is required',
            'description.required' => 'The description is required',
            'experienced.required' => 'The experience is required',
            'qualification.required' => 'The qualification is requied',
            'skills.required' => 'The skills is requied',
            'opening.required' => 'The opening is requied',
            'location.required' => 'The location is requied',
            'responsivity.required' => 'The responsivity is requied',
        ];
    }
}
