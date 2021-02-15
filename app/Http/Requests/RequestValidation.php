<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
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
            'Type' => ['required', 'max:255'],
            'Ranking' => ['integer', 'max:255'],
            'Player' => ['required', 'string', 'max:50'],
            'Country' => ['required', 'string', 'max:255'],
            'Age' => ['required','integer', 'max:120', 'min:0'],
            'Points' => ['required','numeric', 'max:255'],
            'Tournaments' => ['required','numeric', 'max:255'],
        ];
    }
}
