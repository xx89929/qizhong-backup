<?php
namespace App\Http\Controllers\Home;

use App\Business;
use App\Http\Controllers\Controller;
use App\Http\Requests\LookupPost;
use App\Lookup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class HomeController extends Controller
{
    /**
     * 首页显示
     */
    public function index()
    {
        $bus_nav = Business::get(['id','bus_name']);
        return view('home/index/index',['bus_nav' => $bus_nav]);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * 业务页面
     */
    public function business_index($id){
        $bus_nav = Business::get(['id','bus_name']);
        $item = Business::find($id);

        return view('home/business/index',['res' => $item,'bus_nav' => $bus_nav]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save_lookup(LookupPost $request){
        $data = $request->input('lp');
        $lp = new Lookup();
        $lp->lp_phone = $data['lp_phone'];
        $lp->lp_company = $data['lp_company'];
        $res = $lp->save();

        if($res == false){
            return redirect()->back()->with('error','查询失败');
        }else{
            return redirect()->back()->with('success','查询成功，我们会在30分钟内以短信方式通知到您的手机上');
        }
    }


    public function aboutus_index(){
        $bus_nav = Business::get(['id','bus_name']);
        return view('home/aboutus/index',['bus_nav' => $bus_nav]);
    }
}