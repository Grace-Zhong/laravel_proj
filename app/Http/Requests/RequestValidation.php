<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class RequestValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;    // Important! Change to true.
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'Date' => ['required', 'max:255'],
            'Gender' => ['required', 'max:255', 'string'],
            'Type' => ['required', 'string','max:255'],
            'Player' => ['required', 'string', 'max:50'],
            'Country' => ['required', 'string', 'max:100'],
            'Age' => ['required','integer', 'max:120', 'min:0'],
            'Points' => ['required','numeric', 'max:100'],
            'Tournaments' => ['required','numeric', 'max:100'],
        ];
    }

    // public function messages()
    // {
    //     return [
    //         'Date.required' =>'Date cannot be empty.',
    //     ];
    // }

    public function failedValidation(Validator $validator)
    {
        throw (new HttpResponseException(response()->json([
            'status_code' => 500,
            'message' => 'request error',
            'data' => $validator->errors()->first(),
        ], 200)));
    }
}


