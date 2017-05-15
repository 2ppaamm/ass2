<?php

namespace Foobooks\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateBookRequest extends FormRequest
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
            'title' => 'required',
            'cover' => 'required',
            'synopsis' => 'required'
        ];
    }
    public function response(array $errors) {
        return response()->json(['message' => $errors,'code'=>422], 422);
    }
}