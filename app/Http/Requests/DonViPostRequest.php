<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DonViPostRequest extends FormRequest
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
            //
            'MST' => 'required',
            'TenDonVi' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'MST.required' => 'Mã số thuế không được để trống',
            'TenDonVi.required'  => 'Tên đơn vị không được để trống',
        ];
    }
}
