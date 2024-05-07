@extends('layouts.app')

@section('title')
{{$service->name}}
@endsection
@section('content')
<div class="st-content">
    <div class="st-page-heading st-dynamic-bg" style="background-size: cover;background-position: right;background-repeat: no-repeat;" data-src="{{secure_asset('assets/img/treatment-of-tendon-and-ligament-tears.png')}}">
        <div class="container">
            <div class="st-page-heading-in text-center">
                <h1 class="st-page-heading-title">{{$service->name}}</h1>
            </div>
        </div>
    </div>
    <div class="st-height-b100 st-height-lg-b80"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <div class="st-post-details st-style1">
                        <h1>{{$service->title}}</h1>
                {!! $service->content !!}
                    </div>
            </div>
        </div>
    </div>
    <div class="st-height-b100 st-height-lg-b80"></div>
</div>
@endsection
