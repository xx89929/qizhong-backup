<?php

namespace App\Http\Controllers\Admin;

use App\Choose;
use App\ChooseUp;
use App\Http\Controllers\Controller;


class ChooseUpController extends Controller
{
    public function index(){
       $res = Choose::select()->paginate(10);
        dd($res);exit;
    }

}