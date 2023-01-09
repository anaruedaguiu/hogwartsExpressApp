@extends('layouts.app')

@section('content')

    <div class="text-center">
        <img class="img-thumbnail" src="{{ $trainRoute->img }}" alt="">
        <div>
            <h2>{{ $trainRoute->name }}</h2>
            <h2>{{ $trainRoute->origin }}</h2>
            <h2>{{ $trainRoute->destination }}</h2>
            <h2>{{ $trainRoute->date }}</h2>
            <h2>{{ $trainRoute->departureTime }}</h2>
            <h2>{{ $trainRoute->arrivalTime }}</h2>
            <h2>{{ $trainRoute->routeLenght }}</h2>
            <h2>{{ $trainRoute->availableSeats }} Available Seats</h2>
            <h2>{{ $trainRoute->features }}</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-primary" href="{{ route('home') }}">Cancel</a>
        </div>

    </div>

@endsection