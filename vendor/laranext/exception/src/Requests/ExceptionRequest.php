<?php

namespace Laranext\Exception\Requests;

use Laranext\Requests\FormRequest;

class ExceptionRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [];
    }
}
