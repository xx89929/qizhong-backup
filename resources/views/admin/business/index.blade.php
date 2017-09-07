@extends('admin.layouts.admin')
@section('content')
    <div class="business-index">
        @include('admin.layouts.Message')
        <table class="table table-bordered table-hover text-center">
            <tr>
                <th class="text-center" colspan="5">业务范围列表</th>
            </tr>
            <tr>
                <td>序列</td>
                <td>业务名称</td>
                <td>创建时间</td>
                <td>更新时间</td>
                <td>操作</td>
            </tr>
        @foreach($res as $info)
            <tr>
                <td>{{($res->currentPage()*10-10)+($loop->index + 1)}}</td>
                <td>{{$info->bus_name}}</td>
                <td>{{$info->created_at}}</td>
                <td>{{$info->updated_at}}</td>
                <td>
                    <a href="{{route('bus_update',['id' => $info->id])}}"><button class="btn btn-success">修改</button></a>
                    <a href="{{route('bus_del',['id' => $info->id])}}"><button class="btn btn-danger">删除</button></a>
                </td>
            </tr>
        @endforeach
        </table>

        {{ $res->links() }}
    </div>
@endsection
