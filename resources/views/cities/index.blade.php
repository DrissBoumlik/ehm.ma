@extends('layouts.app')

@section('content')


<select class="selectpicker" data-live-search="true" multiple title="Villes" data-style="btn-info">

    @foreach ($cities as $region => $cities)
    <optgroup label="{{ $regions[$region][0]->region }}">
        @foreach ($cities as $city)
        <option value="{{ $city->id }}">{{ $city->ville }}</option>
        @endforeach
    </optgroup>
    @endforeach

</select>

@endsection
