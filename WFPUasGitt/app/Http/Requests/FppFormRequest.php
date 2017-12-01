<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FppFormRequest extends FormRequest
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
              'kode_matkul' => 'required|unique:kategoris|min:5',
            'kp' => 'required',
        ];
    }
    
}
