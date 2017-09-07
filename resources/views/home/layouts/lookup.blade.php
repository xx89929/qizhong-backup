<section>
    <div class="container-fluid lookup-div text-right">
        <div class="col-md-4 text-right">
            <h5>在线30分钟企业核名&nbsp;&nbsp;|</h5>
        </div>
        <div class="col-md-8 text-left">
            <div class="lookup-form">
                <form class="form-inline" method="post" action="{{route('save_lookup')}}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleInputName2">手机号：</label>
                        <input type="text" name="lp[lp_phone]" class="form-control" id="exampleInputName2" placeholder="137XXXXXXXXX">
                    </div>
                    &nbsp;&nbsp;
                    <div class="form-group">
                        <label for="exampleInputEmail2">公司名称：</label>
                        <input type="text" name="lp[lp_company]" class="form-control" id="exampleInputEmail2" placeholder="例：海南伟凡实业有限公司">
                    </div>
                    <button type="submit" class="btn btn-default">查询</button>
                    &nbsp;&nbsp;
                    <div class="form-group">
                        <span id="helpBlock" class="help-block">30分钟之内会将结果以短信方式回复到您手机上.</span>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('home.layouts.Message_index')
</section>