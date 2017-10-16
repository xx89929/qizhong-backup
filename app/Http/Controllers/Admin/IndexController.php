<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * 首页显示
     */
    public function index()
    {
        return view('admin/welcome/index',['web_title' => '海南企众后台管理系统']);
    }

    public function welcome(){
        return view('admin/welcome/welcome');
    }
}