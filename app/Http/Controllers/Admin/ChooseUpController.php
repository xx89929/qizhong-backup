<?php

namespace App\Http\Controllers\Admin;


use App\ChooseUp;
use App\Http\Controllers\Controller;
use App\Models\Choose;


class ChooseUpController extends Controller
{
    public function index(){
        $res = Choose::paginate(10);
        dd($res->items());
        for($i = 0 ; $i < count($res) ; $i ++){
            $res[$i]['services'] = json_decode($res[$i]['services'],true);
            $res[$i]['services'] = unserialize($res[$i]['services']);

            foreach($res[$i]['services'] as $key => $value){
                switch($value){
                    case 1 :
                        return $res[$i]['services'][$value] = '1';
                        break;
                    case 2 :
                        return $res[$i]['services'][$value] = '2';
                        break;
                    case 3 ;
                        return $res[$i]['services'][$value] = '3';
                        break;
                    default :
                        throwException('错误操作');
                        break;
                }
            }

        }

        return view('admin/chooseup/index',['res' => $res]);
    }

}