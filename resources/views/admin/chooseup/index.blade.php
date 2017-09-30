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
                <td>客户姓名</td>
                <td>客户手机号</td>
                <td>所选服务</td>
                <td>创建时间</td>
                <td>更新时间</td>
                <td>操作</td>
            </tr>
            @foreach($res as $r)
                <tr>
                    <td>{{($res->currentPage()*10-10)+($loop->index + 1)}}</td>
                    <td>{{$r->client_name}}</td>
                    <td>{{$r->client_phone}}</td>
                    <td>{{$r->services}}</td>
                    <td>{{$r->created_at}}</td>
                    <td>{{$r->updated_at}}</td>
                    <td>
                        <a href="{{route('bus_update',['id' => $r->id])}}"><button class="btn btn-success">修改</button></a>
                        <a href="{{route('bus_del',['id' => $r->id])}}"><button class="btn btn-danger">删除</button></a>
                    </td>
                </tr>
            @endforeach
        </table>

        {{ $res->links() }}
    </div>
@endsection
