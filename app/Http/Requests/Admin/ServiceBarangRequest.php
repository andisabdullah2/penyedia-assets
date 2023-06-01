<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ServiceBarangRequest extends FormRequest
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
            'nama_barang' => 'required|max:255',
            'berat_barang' => 'required|max:255',
            'jenis_barang' => 'required|max:255',
            'nama_penerima' => 'required|max:255',
            'driver_id' => 'required|max:255',
            'penumpang_id' => 'required|max:255',
            'name_penumpang' => 'required|max:255',
            'name_driver' => 'required|max:255',
            'nohp_penerima' => 'required|max:255',

        ];
    }

    public function messages()
    {
        return [
            'alamat_penjemputan' => 'wajib ada',
            'alamat_pengantaran' => 'wajib ada',
            'nama_barang' => 'wajib ada',
            'berat_barang' => 'wajib ada',
            'jenis_barang' => 'wajib ada',
            'nama_penerima' => 'wajib ada',
            'driver_id' => 'wajib ada',
            'penumpang_id' => 'wajib ada',
            'name_penumpang' => 'wajib ada',
            'name_driver' => 'wajib ada',
            'nohp_penerima' => 'wajib ada',
        ];
    }
    
}
