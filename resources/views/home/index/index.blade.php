@extends('home.layouts.home')

@section('content')

<!-----------------------Banner----------------------->
@include('home.index.banner')

<!--------------------Look-Up-------------------->
@include('home.layouts.lookup')

<!----------------Our-Services--------------->
@include('home.index.our-serveices')

<!-----------------------Our-Advantage------------------>
@include('home.index.our-advantage')

<!----------------company-regist--------------->
@include('home.index.company-regist')

<!-----------------------jizhang------------------>
@include('home.index.jizhang')

<!-----------------------WebExample------------------>
@include('home.index.web_exp')

<!-----------------------OurTeam------------------>
{{--@include('home.index.us_team')--}}

<!-----------------------Price-List------------------>
{{--@include('home.index.price-list')--}}

<!----------------choose-us-div--------------->
@include('home.layouts.chooseup')

@endsection