@extends('layouts.app')

@section('content')
<div class="trainRouteContainer">
    <section class="trainRouteSection"> 
        <div class="dataTrainRoute">
            <h1>{{ $trainRoute->name }}</h1>
            <p>{{ $trainRoute->date }}, {{ $trainRoute->routeLenght }}min.</p>
            <div class="originDestinationRoute">
                <h2><span>From:</span> {{ $trainRoute->origin }} ({{ $trainRoute->departureTime }})</h2>
                <h2><span>To:</span> {{ $trainRoute->destination }} ({{ $trainRoute->arrivalTime }})</h2>
            </div>
            <p>{{ $trainRoute->availableSeats }} sites</p>
        </div>

        <div class="imgContainer">
            <img src="{{ $trainRoute->img }}" alt="">
        </div>
        <div class="descriptionRoute">
            <h2>Description</h2>
            <p>{{ $trainRoute->features }}</p>
        </div>
        <div class="buttonsRoute">
            <div class="reserveButtons">
                <button class="text-warning"><a href="{{route('inscribe', $trainRoute->id)}}">Purchase</a></button>
                <button class="text-warning"><a href="{{route('unscribe', $trainRoute->id)}}">Cancel</a></button>
            </div>
            <a class="backButton" href="{{ route('home') }}">Back</a>
        </div>
    </section>
</div>
@endsection