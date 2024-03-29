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
        <button class="layui-btn layui-btn-danger" id="del_btn" url="{{route('lp_del')}}"><i class="layui-icon">&#xe640;</i>批量删除</button>
        <button class="layui-btn layui-btn-normal" id="add_btn" url="{{route('lp_create')}}"><i class="layui-icon">&#xe654;</i>添加</button>
    </div>

    <div class="layui-row">
        <table class="layui-table" id="lookup_list" url="{{route("get_lookup")}}" lay-filter="item_list">
            <script>
                layui.use(['table','jquery'], function(){
                    var table = layui.table
                            ,$ = layui.jquery
                    table.render({
                        elem: '#lookup_list' //指定原始表格元素选择器（推荐id选择器）
                        ,id: 'lookup_list'
                        ,even: true //开启隔行背景
                        ,url: $('#lookup_list').attr('url')
                        ,height: 470 //容器高度
                        ,cols: [[
                            {checkbox: true}
                            ,{field: 'id', title: 'ID', width: 80}
                            ,{field: 'lp_phone', title: '核名电话', width: 400}
                            ,{field: 'lp_company', title: '核名企业', width: 585}
                            ,{field: 'created_at', title: '添加时间', width: 200}
                            ,{field: 'updated_at', title: '更新时间', width: 200}
                            ,{fixed: 'right', width:150, align:'center', toolbar: '#table_edit'}
                        ]] //设置表头
                        ,page: true
                        ,limit: 10 //默认采用60
                    });
                });

            </script>
        </table>


    </div>

    <script type="text/html" id="table_edit">
        <a class="layui-btn layui-btn-mini"  lay-event="edit" url="{{route('lp_update')}}" this-id="@{{d.id}}"><i class="layui-icon">&#xe642;</i></a>
        <a class="layui-btn layui-btn-danger layui-btn-mini" lay-event="del" url="{{route('lp_del')}}" this-id="@{{d.id}}"><i class="layui-icon">&#xe640;</i></a>
    </script>

    <script type="text/html" id="create_timestamp_to_date">
        <div>@{{d.created_at}}</div>
    </script>
    <script type="text/html" id="update_timestamp_to_date">
        <div>@{{d.updated_at}}</div>
    </script>
@endsection
