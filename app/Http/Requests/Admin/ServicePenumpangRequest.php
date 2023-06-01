<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ServicePenumpangRequest extends FormRequest
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
            'alamat_penjemputan' => 'required|max:255',
            'alamat_pengantaran' => 'required|max:255',
            'jumlah_penumpang' => 'required|numeric',

        ];
    }
     public function messages()
    {
        return [
            'jumlah_penumpang.required'      => 'jumlah penumpang Wajib Diisi',
            'alamat_penjemputan.required'      => 'Alamat penjemputan Wajib Diisi',
            'alamat_pengantaran.required'  => 'Alamat pengantaran Wajib Diisi',
        ];
    }
}
