<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TourValidation extends FormRequest
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
            't_no' => 'required|unique:tours,id|numeric',
            'desc' => 'required|max:100|string',
            'tourtype' => 'exists:tour_types,id'
        ];
    }

    public function messages()
    {
        return [
            't_no.numeric' => 'ERROR: tour number must be numeric!',
            't_no.required' => 'ERROR: tour number field is required!',
            't_no.unique' => 'ERROR: Entered tour number has already been taken!',

            'desc.required' => 'ERROR: Description field is required!',
            'desc.max' => 'ERROR: Description is too long. Limit to only 100 characters!',
            'desc.string' => 'ERROR: Description must be a string!',

            'tourtype.exists' => 'ERROR: Selected tour type does not exist!'
        ];
    }
}
