<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddCarRequest extends FormRequest
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

            'title' => 'required|min:2',
            'model' => 'required|min:2',
            'driver' => 'required|min:2',
            'fare' => 'required|min:2',
            'type' => 'required',
            'image' => 'required',
        ];
    }
}