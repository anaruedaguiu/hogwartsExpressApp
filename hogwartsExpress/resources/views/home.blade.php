@extends('layouts.app')

@section('content')
    <div class="d-flex flex-wrap row justify-content-center my-4 px-xxl-5">
        @foreach ($trainRoutes as $trainRoute)
            <div class="card" style="width: 18rem;">
                <img src="{{ $trainRoute->img }}" class="card-img-top" alt="...">
                <div class="card-body bg-dark">
                    <h5 class="card-title text-primary">{{ $trainRoute->name }}</h5>
                    <h5 class="card-title text-primary">{{ $trainRoute->userName }}</h5>
                    <h5 class="card-title text-primary">{{ $trainRoute->origin }}</h5>
                    <h5 class="card-title text-primary">{{ $trainRoute->destination }}</h5>
                    <h5 class="card-title text-danger">{{ $trainRoute->datetime }}</h5>
                    <h5 class="card-title text-danger">{{ $trainRoute->departureTime }}</h5>
                    <h5 class="card-title text-danger">{{ $trainRoute->arrivalTime }}</h5>
                    <h5 class="card-title text-danger">{{ $trainRoute->routeLenght }}</h5>
                    <h5 class="card-title text-warning">{{ $trainRoute->availableSeats }} Asientos</h5>
                    <p class="card-text text-white">{{ $trainRoute->features }}</p>
                </div>
            </div>
            
        @endforeach
    </div>

<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
