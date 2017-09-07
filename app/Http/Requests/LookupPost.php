<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LookupPost extends FormRequest
{

    protected $rulse = [
        'lp.lp_phone' => ['required','regex:/^(1(([35][0-9])|(47)|[8][0126789]))\d{8}$/'],
        'lp.lp_company' => 'required',
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

}
