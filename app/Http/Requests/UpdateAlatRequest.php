<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateAlatRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $alat = $this->route('alat');

        return [
            'kode' => [
                'required',
                'string',
                'max:20',
                Rule::unique('alats', 'kode')->ignore($alat->id),
            ],
            'nama' => ['required', 'string', 'min:3', 'max:100'],
            'stok' => ['required', 'integer', 'min:0'],
            'kondisi' => ['required', 'in:baik,rusak ringan,rusak berat'],
            'lokasi' => ['required', 'string', 'max:100'],
        ];
    }

    public function messages(): array
    {
        return [
            'kode.required' => 'Kode alat wajib diisi.',
            'kode.unique' => 'Kode alat sudah dipakai.',
            'nama.required' => 'Nama alat wajib diisi.',
            'nama.min' => 'Nama alat minimal harus 3 karakter.',
            'stok.required' => 'Stok alat wajib diisi.',
            'stok.integer' => 'Stok harus berupa angka.',
            'stok.min' => 'Stok tidak boleh negatif.',
            'kondisi.required' => 'Kondisi alat wajib diisi.',
            'kondisi.in' => 'Kondisi harus baik, rusak ringan, atau rusak berat.',
            'lokasi.required' => 'Lokasi alat wajib diisi.',
            'lokasi.string' => 'Lokasi harus berupa teks.',
        ];
    }
}
