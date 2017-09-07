@extends('home.layouts.home')
@section('content')
<link href="{{url('css/my_item_style.css') }}" rel="stylesheet">
@include('home.business.banner')
@include('home.layouts.lookup')
    <section class="item_index">
        <div class="container-fluid">
            @include('home.business.portion_left')
            <div class="col-md-10">
                <div class="item_info" data-target="#navbar-item">
                    <div class="item-box" id="company_register">
                        <h1 class="text-center">{{$res->bus_name}}</h1>
                        <p class="item_update text-center">更新时间：{{$res->updated_at}}</p>
                        {!! $res->bus_content !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection