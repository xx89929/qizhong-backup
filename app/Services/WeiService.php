<?php

namespace App\Services;

use App\Contracts\WeiContract;
use GuzzleHttp\Client;

class WeiService implements WeiContract
{
//这里我写一个服务方法，以被别的地方来调用
    public function callme($say)
    {
        echo $say;
    }


    public function three_rd_session($len) {
        $fp = @fopen('/dev/urandom','rb');
        $result = '';
        if ($fp !== FALSE) {
            $result .= @fread($fp, $len);
            @fclose($fp);
        } else {
            trigger_error('Can not open /dev/urandom.');
        }
        // convert from binary to string
        $result = base64_encode($result);
        // remove none url chars
        $result = strtr($result, '+/', '-_');
        return substr($result, 0, $len);
    }

    public function CodeReturnRdSessionValue($rd_session, $code)
    {
        $client = new client();
        $data['appid'] = env('WEI_APP_AppID');
        $data['secret'] = env('WEI_APP_AppSecret');
        $data['grant_type'] = 'authorization_code';
        $data['js_code'] =  $code;

        $url = env('WEI_APP_GetSessionKey');

        $res = $client->request('get', $url,['query' => $data]);

        $result = json_decode($res->getBody());

        return $result;
    }


}



