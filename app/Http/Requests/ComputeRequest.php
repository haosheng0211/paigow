<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComputeRequest extends FormRequest
{
    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            'cards'    => ['required', 'array', 'size:16'],
            'location' => ['required', 'string', 'in:north,south']
        ];
    }
}
