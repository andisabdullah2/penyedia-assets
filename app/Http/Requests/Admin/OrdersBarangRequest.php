<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class OrdersBarangRequest extends FormRequest
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
            // 'users_id' => 'integer|exists:users,id',
            'driver_id' => 'required|numeric',
            'penumpang_id' => 'required|numeric',
            'name_driver' => '',
            'name_penumpang' => '',
            'services_barang_id' => 'required|numeric',
            'status' => 'required|numeric',

        ];
    }
     public function messages()
    {
        return [
            'driver_id.required'      => 'harus ada',
            'penumpang_id.required'      => 'harus ada',
            'name_driver' => 'harus ada',
            'name_penumpang' => 'harus ada',
            'services_barang_id.required'  => 'harus ada',
            'status.required'  => 'harus ada',
        ];
    }
}
