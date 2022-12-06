<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaunaRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        //バリデーション
        return [
            'name' => 'required|string|max:32',
            'sauna_temperature' => 'required|numeric|min:1|max:200',
            'sauna_humidity' => 'required|numeric|min:0|max:100',
            'water_temperature' => 'required|numeric|min:-50|max:40',
        ];
    }
}
