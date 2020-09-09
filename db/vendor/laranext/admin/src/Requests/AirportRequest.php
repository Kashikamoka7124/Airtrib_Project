<?php

namespace Laranext\Admin\Requests;

use Laranext\Requests\FormRequest;

class AirportRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'city' => 'required',
            'country' => 'required',
            'iata' => [
                'required',
                'alpha',
                'size:3',
                function ($attribute, $value, $fail) {
                    if (strtoupper($value) !== $value) {
                        $fail('The :attribute must be uppercase.');
                    }
                },
            ],
            'city_iata' => [
                'required',
                'alpha',
                'size:3',
                function ($attribute, $value, $fail) {
                    if (strtoupper($value) !== $value) {
                        $fail('The :attribute must be uppercase.');
                    }
                },
            ],
        ];
    }
}
