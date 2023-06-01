<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AssetsRequest extends FormRequest
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
            'kriterias_id' => 'required|integer',
            'owners' => 'required',
            'nama_assets' => 'required',
            'kategori' => 'required',
            'harga' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'users_id.unique'      => 'Pengguna telah didaftarkan',
        ];
    }
}
