<?php

namespace App\Http\Requests\Menu;

use Illuminate\Foundation\Http\FormRequest;

class CreateFormRequest extends FormRequest
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
            'name' => 'required',
            'number' => 'required',
            'content' => 'required'
        ];
    }

    public function messages() : array
    {
        return [
            'name.required' => 'Vui lòng nhập Tên Loại Sự Kiện',
            'number.required' => 'Vui lòng nhập Điểm tích luỹ',
            'content.required' => 'Vui lòng nhập Mô tả chi tiết',
        ];
    }
}
