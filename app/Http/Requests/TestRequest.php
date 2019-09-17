<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestRequest extends FormRequest
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
            'name'  => 'required|alpha',
            'email' => 'required|email',
            'age'   => 'required|integer',
            'mess'  => 'required|max:20'
        ];
    }

    public  function messages(){
        return[
            'email.required' => 'Vui lòng nhập email',
            'email.email' => 'Không đúng định dạng của email',
            'name.required' => 'Vui lòng nhập tên',
            'name.alpha'=>'Tên không được nhập số',
            'age.required'=>'Vui lòng nhập tuổi',
            'age.integer'=>'Tuổi phải kiểu số',
            'mess.required'=>'Vui lòng nhập tin nhắn',
            'mess.max'=>'Tin nhắn tối đa 20 ký tự'
        ];
    }
}
