<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComposesRequest extends FormRequest
{
    /**
     * @return array
     */
    public function rules(): array
    {
        switch ($this->route()->getActionMethod()) {
            case 'index':
                return [
                    'pairs' => ['required', 'bool'],
                    'order' => ['nullable', 'string'],
                    'card'  => ['nullable', 'int', 'exists:cards,id']
                ];
            case 'update':
                return [
                    'order'       => ['required', 'int'],
                    'score_south' => ['required', 'numeric'],
                    'score_north' => ['required', 'numeric'],
                ];
            default:
                return [];
        }
    }
}
