@extends('layouts.app')
@section('title')
    {{ ucfirst(trans('file.menu-top.services')) }}
@endsection



@section('content')

@include('layouts.headline', ['headline' => ucfirst(trans('file.menu-top.services'))])

<div class="container">
    <div class="section ptb-50">
        <div class="row center">
            <hr class="section-title-line"/>
            <h1 class="section-title uppercase inline-block">CORPORATE FARMING</h1>
        </div>
        <div class="row mb-50">
            <div class="col-md-6">
                <div class="text medium-size">
                    <p>We undertake large-scale farming and possess the capacity to provide specialist advice and superior service to clients who seek business opportunities in agriculture.</p>
                    <p>Companies can seek our support in the domains of farm development, farm management, irrigation consultancy, pre or post-harvest management, and other specialised services that are tailored to their individual needs.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="image">
                    <img src="{{ asset('/images/our_service/1.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="row mb-50">
            <div class="col-md-6">
                <div class="image">
                    <img src="{{ asset('/images/our_service/2.png') }}" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="text medium-size">
                    <p>We utilize new technology with a keen focus on detailed farming practices aimed at maximizing production quantity, while also paying attention to getting the best quality produce.</p>
                    <p>We take on development of arable and non-arable land in large scale and convert them into full scale cultivatable lands, providing step-by-step guidance for planning, designing and managing farms with various crops using modern agriculture methods. We also develop and establish all the requirements for irrigation, mechanization, other facilities and infrastructure.</p>
                </div>
            </div>
        </div>
        <div class="row mb-50">
            <div class="col-md-6">
                <div class="text medium-size">
                    <p>We offer productive and profitable farm management services by employing the latest in technology, combining local and international resources, paying attention to detail. We deliver a cost-effective service which can suit multiple needs, ranging from full management to ad hoc consultancy ensuring that your business meets its full potential.</p>
                    <p>Our expertise is in open fields and covered/protected fields (green houses, net houses).</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="image">
                    <img src="{{ asset('/images/our_service/3.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
