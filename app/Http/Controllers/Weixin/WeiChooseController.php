<?php
namespace App\Http\Controllers\Weixin;

use App\Http\Controllers\Controller;
use App\Models\Choose;
use Illuminate\Http\Request;


class WeiChooseController extends Controller
{
    public function create(Request $request){
//        return $request->input('value');exit;
        if(empty($request->input('value')) || $request == '[]') {
            return ['msg' => 'not value'];
        }
        $data = $request->input('value');
        $data['services'] = implode(',',$data['services']);
        $data['region'] = implode(',',$data['region']);
        $Choose = new Choose();
        $Choose->client_name = $data['client_name'];
        $Choose->client_phone = $data['client_phone'];
        $Choose->services = json_encode($data['services']);
        $Choose->region = json_encode($data['region']);
        $Choose->request_type = json_encode($data['request_type']);
        $res = $Choose->save();
        if($res){
            return ['msg' => 'success'];
        }else{
            return ['msg' => 'false'];
        }
    }
}