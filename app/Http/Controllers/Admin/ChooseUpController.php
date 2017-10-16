<?php

namespace App\Http\Controllers\Admin;


use App\ChooseUp;
use App\Http\Controllers\Controller;
use App\Models\Choose;


class ChooseUpController extends Controller
{
    public function index(){
        $res = Choose::paginate(10);
        for($i = 0 ; $i < count($res) ; $i ++){
            $res[$i]['services'] = json_decode($res[$i]['services'],true);
            $res[$i]['services'] = unserialize($res[$i]['services']);
        }
        
        return view('admin/chooseup/index',['res' => $res]);
    }

}