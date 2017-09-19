@if($errors->has('lp.*'))
    <div id="myAlert" class="alert alert-danger text-center">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        @foreach($errors->all() as $error)
            <strong>失败！</strong>{{ $error }}
        @endforeach
    </div>
@endif

@if(session('success'))
    <div id="myAlert" class="alert alert-success text-center">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>成功！</strong>{{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div id="myAlert" class="alert alert-danger text-center">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>失败！</strong>{{ session('error') }}
    </div>
@endif
