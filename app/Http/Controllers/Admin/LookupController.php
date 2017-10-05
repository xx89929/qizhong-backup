<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Lookup;


class LookupController extends  Controller{

    public function index(){
        $res = Lookup::select()->paginate(10);
        return view('admin/lookup/index',['res' => $res]);
    }
}