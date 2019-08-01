@extends('layouts.app')
@section('title')
    {{ ucfirst(trans('file.menu-top.quality-assurances')) }}
@endsection



@section('content')

@include('layouts.headline', ['headline' => ucfirst(trans('file.menu-top.quality-assurances'))])

<div class="container-fluid">
    <div class="row">
        <div class="brand-img">
            <img src="images/_globalgap.png" alt="">
        </div>
    </div>
</div>

@endsection
