<?php
namespace App\Http\Controllers;


use App\Contracts\WeiContract;
use App\Http\Controllers\Controller;


class TestController extends Controller
{
    protected $test;

    public function __construct(WeiContract $test)
    {
        $this->test = $test;
    }


    public function index(){
//        $test = App::make('Wei');
//        $test->callme('make test');
       // $this->test->callme('hahaha');
        //$a = Helpers\test_func();
        $b = \App\Helpers\three_rd_session(2*180);
        //echo 123;exit;
    }
}
