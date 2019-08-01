@extends('layouts.app')
@section('title')
    {{ ucfirst(trans('file.menu-top.events')) }}
@endsection




@section('content')

@include('layouts.headline', ['headline' => ucfirst(trans('file.menu-top.events'))])

<div class="container padding-80">
    <div class="row">
        @if ($empty)
        <h1 class="center">No event was found</h1>
        @else

        @foreach($events as $event)
        <div class="col-md-4 col-sm-6 col-xs-12 card-wrapper">
            <a href="/{{ $event->id }}">
                <div class="card">
                    <div class="card-img-wrapper">
                        <img class="card-img-top" src="{{ $event->image }}" alt="{{ $event->title }}">
                    </div>
                    <div class="card-body">
                        <span class="card-date mb-10 block">{{ (new Carbon\Carbon($event->start_date))->format('F d, Y') }}</span>
                        <h5 class="card-title uppercase">{{ str_limit($event->title, $limit = 20) }}</h5>
                        <p class="card-text">{{ str_limit($event->description, $limit = 60) }}</p>
                    </div>
                </div>
            </a>
        </div>
        @endforeach

        @endif
    </div>
</div>

@endsection
