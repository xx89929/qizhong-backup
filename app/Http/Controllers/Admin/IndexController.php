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
        return view('admin/auth/index');
    }
}