<?php

namespace App\Http\Requests\Event;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'address' => 'required',
            'date_sign_up' => 'required',
            'date_begin' => 'required|date|after_or_equal:date_sign_up',
            'date_end' => 'required|date|after_or_equal:date_begin',
            'number_student' => 'required|min:1',
            'number_teacher'=> 'required|min:1',
            'menu_id'=> 'required',
            'thumb'=> 'required',
            'thumb_active'=> 'required',
            'content'=> 'required',
            'teacher_id'=>'required',
            'score'=>'required|min:0|max:100'
        ];
    }

    public function messages() : array
    {
        return [
            'name.required' => 'Vui lòng nhập Tên Sự Kiện',
            'address.required' => 'Vui lòng nhập Địa chỉ',
            'date_sign_up.required' => 'Vui lòng chọn ngày Sinh viên đăng ký',
            'date_begin.after_or_equal:date_sign_up' => 'Vui lòng chọn lại ngày phù hợp',
            'date_end.after_or_equal:date_begin' => 'Vui lòng chọn lại ngày phù hợp',
            'date_begin.required' => 'Vui lòng chọn ngày Tổ chức sự kiện',
            'date_end.required' => 'Vui lòng chọn ngày Kết thúc sự kiện',
            'number_student.required'=> 'Vui lòng nhập Số lượng Sinh Viên tham gia',
            'number_teacher.required'=> 'Vui lòng nhập Số lượng Giáo Viên tham gia',
            'menu_id.required' => 'Vui lòng chọn Loại sự kiện',
            'thumb.required' => 'Vui lòng tải ảnh minh hoạ sự kiện',
            'thumb_active.required' => 'Vui lòng tải ảnh Minh chứng',
            'content.required' => 'Vui lòng nhập Nội dung',
            'score.required' => 'Vui lòng nhập Điểm',
        ];
    }
}
