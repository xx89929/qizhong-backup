@extends('ckeditor')
<form class="form-horizontal" enctype="multipart/form-data" method="post" action="">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="business_name" class="col-sm-2 control-label">业务名称：</label>
        <div class="col-sm-10">
            <input type="text" name="business[name]" value="{{isset($edit->bus_name) ? $edit->bus_name :old('business')['name']}}" class="form-control" id="business_name" placeholder="例：代理记账">
        </div>
    </div>
    <div class="form-group">
        <label for="business_name" class="col-sm-2 control-label">业务内容：</label>
        <div class="col-sm-10">
            @include('ckeditor')
            <textarea name="business[content]" id="editor1">{{isset($edit->bus_content) ? $edit->bus_content :old('business')['content']}}</textarea>
        </div>
    </div>


    @if(isset($edit->id) ? $edit->id : '')
        <input type="hidden" name="business[bus_id]" value="{{$edit->id}}">
    @endif

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default submits">提交</button>
        </div>
    </div>
</form>