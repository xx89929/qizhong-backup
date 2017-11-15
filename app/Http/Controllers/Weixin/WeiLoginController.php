<?php
namespace App\Http\Controllers\Weixin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Prophecy\Exception\Exception;

use App\Contracts\WeiContract;


class WeiLoginController extends Controller
{
    protected $WeiApp;
    public function __construct(WeiContract $WeiApp)
    {
        $this->WeiApp = $WeiApp;
    }

    public function login(Request $request){

        $three_rd_session = $this->WeiApp->three_rd_session(2*128);
        $session_key = $this->WeiApp->CodeReturnRdSessionValue($three_rd_session,$request->input('code'));

        if(property_exists($session_key,'openid') && $session_key->openid != null){
            $value = json_encode($three_rd_session.$session_key->openid);
            session(['3rd_session' => $value]);
            return $value;
        }


        //phpinfo();exit();
        session(['123' =>'456']);
        var_dump(session('123'));
        //$request->session()->put('123','456');
       // Redis::set('3rd_session',$session_key);
    }
}