<?php

namespace App\Http\Middleware;

use Closure;

class CheckWechatToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $token = env('WEIXIN_KEY');
        $timestamp = $request->input('timestamp');
        $signature = $request->input('signature');
        $nonce = $request->input('nonce');
        $echostr = $request->input('echostr');

        $weixinArr = array($token,$timestamp,$nonce);
        sort($weixinArr,SORT_STRING);
        $weixinstr = implode($weixinArr);
        $weixinstr = sha1($weixinstr);
        if($weixinstr != $signature){
            return false;
        }
        return $next($request);
    }
}
