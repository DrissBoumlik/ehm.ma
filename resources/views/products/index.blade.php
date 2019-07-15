@extends('layouts.app')


@section('content')

<div class="container">
    <h2 class="uppercase center">products</h2>
    @foreach ($products as $city => $_products)
    <div class="row">
        <h4 class="uppercase center upperline city">{{ $city }}</h4>
    </div>
    <div class="row">
        @foreach ($_products as $product)
        <div class="col-md-{{ 12/$_products->count() }}">
            <img src="{{ $product->image }}" alt="" class="product-img">
            <h5 class="uppercase center" id="{{ $product->id }}">{{ $product->name }}</h5>
            <p class="justify">{{ $product->description }}</p>
        </div>
        @endforeach
    </div>
    @if ($loop->index != count($products) - 1)
    <hr class="seperate-line"/>
    @endif
    @endforeach
</div>
@endsection
