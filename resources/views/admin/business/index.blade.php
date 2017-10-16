@extends('admin.layouts.layout')
@section('content')
    @include('admin.layouts.admin_message')
    <form class="layui-form">
        <div class="layui-form-item layui-col-lg8 layui-col-lg-offset2">
            <div class="layui-input-inline">
                <input type="text" name="begin_time" class="layui-input" id="begin_times" placeholder="开始时间">
            </div>
            <div class="layui-input-inline">
                <input type="text" name="end_time" class="layui-input" id="end_times" placeholder="结束时间">
            </div>

            <div class="layui-input-inline">
                <button class="layui-btn">
                    <i class="layui-icon" id="BusAddBtn">&#xe615;</i> 添加
                </button>
            </div>
        </div>
    </form>

    <div class="layui-row">
        <button class="layui-btn layui-btn-danger" id="del_business_btn" url="{{route('bus_del')}}"><i class="layui-icon">&#xe640;</i>批量删除</button>
        <button class="layui-btn layui-btn-normal" id="add_business_btn" url="{{route('bus_create')}}"><i class="layui-icon">&#xe654;</i>添加</button>
    </div>

    <div class="layui-row">
        <table class="layui-table" id="business_list" url="{{route("get_business")}}" lay-filter="business_list">

        </table>
    </div>

    <script type="text/html" id="table_edit">
        <a class="layui-btn layui-btn-mini"  lay-event="edit" url="{{route('bus_update')}}" this-id="@{{d.id}}"><i class="layui-icon">&#xe642;</i></a>
        <a class="layui-btn layui-btn-danger layui-btn-mini" lay-event="del" url="{{route('bus_del')}}" this-id="@{{d.id}}"><i class="layui-icon">&#xe640;</i></a>
    </script>

    <script type="text/html" id="create_timestamp_to_date">
        <div>@{{d.created_at}}</div>
    </script>
    <script type="text/html" id="update_timestamp_to_date">
        <div>@{{d.updated_at}}</div>
    </script>
@endsection
