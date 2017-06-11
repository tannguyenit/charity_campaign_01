<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Request;

class EventRequest extends FormRequest
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
            'name' => 'required|max:255',
            'start_date' => 'required|date|date_format:"Y/m/d',
            'end_date' => 'required|date|date_format:"Y/m/d',
            'image' => ['required', 'mimes:jpg,jpeg,JPEG,png,gif', 'max:2024'],
            'address' => 'required',
            'description' => 'required',
            'content' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'category.event' => trans('event.validate.required_input'),
        ];
    }
}
