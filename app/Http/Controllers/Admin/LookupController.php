<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Lookup;
use Illuminate\Http\Request;


class LookupController extends  Controller{

    public function index(){
        return view('admin/lookup/index',['web_title' => '在线核名管理']);
    }

    public function create(Request $request)
    {
        if($request->input('lp')){

            $data = $request->input('lp');
            $lookup = new Lookup();
            $lookup->lp_phone = $data['lp_phone'];
            $lookup->lp_company = $data['lp_company'];
            $res = $lookup->save();
            if($res == false){
                return response()->json(['msg' => '添加失败']);
            }else{
                return response()->json(['msg' => '添加成功']);
            }
        }
        return view('admin/lookup/add',['web_title' => '添加业务']);
    }

    public function get_lookup(Request $request){
        if (!$request->has('page')) {
            return false;
        } else {
            $page = $request->input('page');
            $limit= $request->input('limit');
            $cout = Lookup::count();
            $res = Lookup::skip(($page-1)*$limit)->take(10)->get();
            $data['code'] = 0;
            $data['msg'] = '';
            $data['count'] = $cout;
            $data['data'] = $res->toArray();
            for ($i = 0; $i < count($data['data']); $i++) {
                $data['data'][$i]['created_at'] = date('Y-m-d H:i:s', $data['data'][$i]['created_at']);
                $data['data'][$i]['updated_at'] = date('Y-m-d H:i:s', $data['data'][$i]['updated_at']);
            }
            return $data;
        }
    }

    public function update(Request $request , $id){
        $update = Lookup::find($id);


        if($result = $request->input('lp')){
            $update->lp_phone = $result['lp_phone'];
            $update->lp_company = $result['lp_company'];
            $res = $update->save();
            if($res == false){
                return response()->json(['msg' => '更新失败']);
            }else{
                return response()->json(['msg' => '更新成功']);
            }
        }
        return view('admin/lookup/edit',['web_title' => '修改','edit' => $update]);
    }


    /**
     * @param Request $request
     * 删除
     */
    public function del($id){
        $id = explode(",",$id);
        $res = Lookup::destroy($id);
        if($res == false){
            return response()->json(['msg' => '删除失败']);
        }else{
            return response()->json(['msg' => '删除成功']);
        }
    }
}