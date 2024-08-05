<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nameSP' => 'required|string|max:20',
            'descriptionSP' => 'required|string',
            'priceSP' => 'required|numeric|min:0',
            'imageSP' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ];
    }

    public function messages()
    {
        return [
            'nameSP.required' => 'Tên sản phẩm không được để trống',
            'nameSP.max' => 'Tên quá dài không vượt quá 20 ký tự',
            'descriptionSP.required' => 'Mô tả không được để trống',
            'descriptionSP.string' => 'Mô tả phải là dạng chuỗi',
            'priceSP.required' => 'Giá không được để trống',
            'priceSP.numeric' => 'Giá phải là số',
            'imageSP.required' => 'Ảnh không được để trống',
            'imageSP.image' => 'Ảnh chỉ được ở dạng:jpeg,png,jpg,gif,svg',
            'imageSP.max' => 'Đường dẫn ảnh quá dài đề nghị đổi tên'
        ];
    }
}
