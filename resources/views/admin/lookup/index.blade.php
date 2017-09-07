@extends('admin.layouts.admin')
@section('content')
    <div class="business-index">
        @include('admin.layouts.Message')
        <table class="table table-bordered table-hover table-hover text-center">
            <tr>
                <th class="text-center" colspan="6">在线核名-名单</th>
            </tr>
            <tr>
                <td>序列</td>
                <td>客户手机号</td>
                <td>客户预成立公司名称</td>
                <td>创建时间</td>
                <td>更新时间</td>
                <td>操作</td>
            </tr>
            @foreach($res as $lp)
                <tr>
                    <td>{{($res->currentPage()*10-10)+($loop->index + 1)}}</td>
                    <td>{{$lp->lp_phone}}</td>
                    <td>{{$lp->lp_company}}</td>
                    <td>{{$lp->created_at}}</td>
                    <td>{{$lp->updated_at}}</td>
                    <td>
                        <a href="{{route('bus_update',['id' => $lp->id])}}"><button class="btn btn-success">修改</button></a>
                        <a href="{{route('bus_del',['id' => $lp->id])}}"><button class="btn btn-danger">删除</button></a>
                    </td>
                </tr>
            @endforeach
        </table>

        {{ $res->links() }}
    </div>
@endsection
