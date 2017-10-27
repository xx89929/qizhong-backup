<?php
namespace App\Http\Controllers\Weixin;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Request;
use GuzzleHttp\Client;

class WeiLoginController extends Controller
{
    public function login(Request $request){
        $client = new client();

        $data['js_code'] =  $request->input('code');
        $data['appid'] = 'wx0003cbc9f5718862';
        $data['secret'] = '09b88351985f7fe434956dce7cf89189';
        $data['grant_type'] = 'authorization_code';
        $url = "https://api.weixin.qq.com/sns/jscode2session";
        $res = $client->request('get', $url,['query' => $data]);

        var_dump($res);exit();
        return $res->getBody();
    }
}