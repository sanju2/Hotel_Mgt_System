<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TReservationValidation extends FormRequest
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
            'fname' => 'required|string|max:20|alpha',
            'lname' => 'required|string|max:20|alpha',          
            'ttype' => 'exists:tour_types,id',
            'cin' => 'required|after_or_equal:today',
            'cout' => 'required|after:cin',
            't_no' => 'exists:tours,id'
        ];
    }

    public function messages()
    {
        return [
            'fname.string' => 'ERROR: First name must be a string!',
            'fname.required' => 'ERROR: First name field is required!',
            'fname.max' => 'ERROR: First name is too long. Limit to only 20 characters!',
            'fname.alpha' => 'ERROR: First name should contain letters only',
            'lname.alpha' => 'ERROR: Last name should contain letters only',
            'lname.string' => 'ERROR: Last name must be a string!',
            'lname.required' => 'ERROR: Last name field is required!',
            'lname.max' => 'ERROR: Last name is too long. Limit to only 20 characters!',

            

            'rtype.exists' => 'ERROR: Selected room type does not exist!',
            'cin.required' => 'ERROR: Check in field is required!',
            'cin.after_or_equal' => 'ERROR: Check in date must be today or a date after today!',
            'cout.required' => 'ERROR: Check out field is required!',
            'cout.after' => 'ERROR: Check out date must be a date after check in date!',
            't_no.exists' => 'ERROR: Selected tour does not exist!'
        ];
    }
}
