<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChooseupPost extends FormRequest
{

    protected $rulse = [
        'data.client_phone' => ['required','regex:/^(1(([35][0-9])|(47)|[8][0126789]))\d{8}$/'],
        'data.client_name' => 'required',
        'data.services' => 'required',
    ];

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
        return $this->rulse;
        /*
        return [
            //sudo:执行操作
        ];
        */
    }

    public function messages(){
        return [
            'data.client_phone' => '手机号必须',
            'data.client_name'  => '姓名必须',
            'data.services'  => '服务必须',
        ];
    }

}
