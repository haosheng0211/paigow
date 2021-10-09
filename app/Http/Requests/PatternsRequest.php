<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatternsRequest extends FormRequest
{
    /**
     * @return array
     */
    public function rules(): array
    {
        switch ($this->route()->getActionMethod()) {
            default:
                return [];
        }
    }
}
