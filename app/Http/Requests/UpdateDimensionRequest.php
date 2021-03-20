<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDimensionRequest extends FormRequest
{

    public function rules()
    {
        return [
            'title' => 'required|string'
        ];
    }
}
