<?php

namespace App\Http\Controllers\Weixin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class WeixinController extends Controller
{
    public function index(Request $request){
        echo 123;exit;
        return $request->input('echostr');
    }


    public function getAccessToken(){
        $appid = env('WEIXIN_AppID');
        $appsecret = env('WEIXIN_AppSecret');
        $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$appid&secret=$appsecret";
        $resout = file_get_contents($url);
        Log::info('$resout:'.$resout.'------$url:'.$url);
    }
}
