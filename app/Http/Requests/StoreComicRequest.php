<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
        return [
            'title' => 'required|unique:comics|max:255',
            'description' => 'nullable|string',
            'thumb' => 'required|max:255|string',
            'price' => 'required|numeric',
            'series' => 'nullable|max:255|string',
            'sale_date' => 'required|date',
            'type' => 'nullable|max:255|string',
        ];
    }
}
