<form class="layui-form layui-form-pane" method="post" action="" id="addBus">
    {{ csrf_field() }}
    <div class="layui-form-item layui-col-lg12">
        <label class="layui-form-label layui-col-lg4">核名电话</label>
        <div class="layui-input-block">
            <input type="text" name="lp[lp_phone]" value="{{isset($edit->lp_phone) ? $edit->lp_phone :old('lp')['lp_phone']}}" required  lay-verify="required" placeholder="核名电话" autocomplete="off" class="layui-input">
        </div>
    </div>

    <div class="layui-form-item layui-col-lg12">
        <label class="layui-form-label layui-col-lg4">核名企业</label>
        <div class="layui-input-block">
        <textarea name="lp[lp_company]" class="layui-textarea" id="ItemContent" style="display: none">
            {{isset($edit->lp_company) ? $edit->lp_company :old('lp')['lp_company']}}
        </textarea>
        </div>
    </div>

    <div class="layui-form-item">
        <div class="layui-input-block">
            <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
        </div>
    </div>
</form>