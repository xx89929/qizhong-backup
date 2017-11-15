<section >
    <div class="section-black-bg choose-us-div">
        <div class="container text-center">
            <div class="section-title-top">
                <h1>选择我们<small>/Choose Us</small></h1>
                <div class="star-border-1">
                    <span class="glyphicon glyphicon-star star-star-1" aria-hidden="true"></span>
                </div>
            </div>
            <div class="section-title-bottom">
                <p class="choose-us-div-p">我们一直遵循着客户是上帝的理念，诚信永远排在第一位。
                    <br>
                    用心服务，提供一对一服务，提供效率的解决方案。
                </p>
            </div>

            <div class="person-info">
                <div class="col-md-6 col-md-offset-3 choose-us-div-form">
                    <form method="post" action="{{route('chooseup_add')}}">
                        {{ csrf_field() }}
                        <div class="form-group text-left">
                            <label  for="yourName">您的姓名：</label>
                            <input type="text" name="data[client_name]" class="form-control" id="yourName" placeholder="请填写您的姓名">
                            @if($errors->has('data.client_name'))
                                <span class="help-block-my">{{$errors->first('data.client_name')}}</span>
                            @endif
                        </div>
                        <div class="form-group text-left">
                            <label for="yourPhone">您的联系电话：</label>
                            <input type="text" name="data[client_phone]" class="form-control" id="yourPhone" placeholder="请填写您的联系电话">
                            @if($errors->has('data.client_phone'))
                                <span class="help-block-my">{{$errors->first('data.client_phone')}}</span>
                            @endif
                        </div>
                        <div class="form-group text-left">
                            <label for="yourPhone">您想代理的业务类型：</label>
                            <div class="checkbox">
                                <label>
                                    <input name="data[services][]" type="checkbox" value="工商服务">
                                    工商服务
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="data[services][]" type="checkbox" value="财务服务">
                                    财务服务
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="data[services][]" type="checkbox" value="科技服务">
                                    科技服务
                                </label>
                            </div>
                            @if($errors->has('data.services'))
                                <span class="help-block-my">{{$errors->first('data.services')}}</span>
                            @endif

                            <input name="data[request_type]" type="hidden" value="官网">
                        </div>
                        <button type="submit" class="btn btn-info btn-lg">提交</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>