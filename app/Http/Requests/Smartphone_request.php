<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Smartphone_request extends FormRequest
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

          'brand' => 'required',
          'model' => 'required',
          'display' => 'required|integer',
          'mem_ext' => 'nullable|integer'
        ];
    }

    public function messages() {

      return [

        'brand.required' => 'Il campo brand è necessario!'
      ];
    }
}
