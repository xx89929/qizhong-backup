<?php
namespace App\Http\Controllers\Admin;

use App\Business;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Bus;
use Symfony\Component\Yaml\Tests\B;

class BusinessController extends Controller
{
    /**
     * 业务范围显示
     */
    public function index()
    {
        $res = Business::select('id','bus_name','updated_at','created_at')->paginate(10);
        return view('admin/business/index',['res' => $res]);
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * 添加页面、存储
     */
    public function create(Request $request)
    {

        if($request->input('business')){
            $data = $request->input('business');
            $business = new Business();
            $business->bus_name = $data['name'];
            $business->bus_content = $data['content'];
            $res = $business->save();
            if($res == false){
                return redirect('admin/business/index')->with('error','新建失败');

            }else{
                return redirect('admin/business/index')->with('success','新建成功');
            }
        }
        return view('admin/business/create');
    }

    /**
     * @param Request $request
     * @param $id
     * @return $this|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * 修改页面、更新
     */

    public function update(Request $request , $id){
        $update = Business::find($id);

        if($request['business']){
            $data = $request['business'];
            $update->bus_name = $data['name'];
            $update->bus_content = $data['content'];
            $res = $update->save();
            if($res == false){
                return redirect('admin/business/index')->with('error','更新失败');
            }else{
                return redirect('admin/business/index')->with('success','更新成功');
            }
        }
        return view('admin/business/edit',['edit' => $update]);
    }


    /**
     * @param Request $request
     * 删除
     */
    public function del($id){
        $del = Business::find($id);
        $res = $del->delete();
        if($res == false){
            return redirect('admin/business/index')->with('error','删除失败');
        }else{
            return redirect('admin/business/index')->with('success','删除成功');
        }
    }
}