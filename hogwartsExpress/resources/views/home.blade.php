@extends('layouts.app')

@section('content')

    <div class="d-flex justify-content-center">
        <button class=" createButton">
            <a href="{{ route('createTrainRoute') }}" style="text-decoration:none">
                <div class="textCreateButton"> NEW TRAIN ROUTE </div>
            </a>
        </button>
    </div>

    <div class="d-flex flex-wrap row justify-content-center my-4 px-xxl-5">
        @foreach ($trainRoutes as $trainRoute)
            <div class="card" style="width: 18rem;">
                <a href="{{ route('showTrainRoute', $trainRoute->id) }}">
                    <img src="{{ $trainRoute->img }}" class="card-img-top" alt="...">
                </a>
                <div class="card-body bg-dark">
                    <h2 class="card-title nameTitle">{{ $trainRoute->name }}</h2>
                    <h5 class="card-title title">📍 {{ $trainRoute->origin }} </h5>
                    <h5 class="card-title title">📍 {{ $trainRoute->destination }}</h5>
                    <h5 class="card-title title">📅 {{ $trainRoute->date }}</h5>
                    <h5 class="card-title title">🕑 {{ $trainRoute->departureTime }} - {{ $trainRoute->arrivalTime }}</h5>
                    <h5 class="card-title title">⏱️ {{ $trainRoute->routeLenght }}</h5>
                    <h5 class="card-title title">💺 {{ $trainRoute->availableSeats }} Asientos</h5>
                    <!-- <p class="card-text text-white">{{ $trainRoute->features }}</p> -->
                    <form action="{{ route('deleteTrainRoute', ['id'=> $trainRoute->id]) }}" method="post" class="formStyle">
                    @method('delete')
                    @csrf 
                        <button type="submit"
                            class="bt-adm removeButton m-1 d-flex justify-content-center align-items-center mx-auto"
                            onclick="return confirm('Are you sure you want to delete this Train Route? {{ $trainRoute->name }} - ID {{ $trainRoute->id }}')">Remove 
                        </button>
                    <a class="bt-adm anchorForm m-1 d-flex justify-content-center align-items-center" style="text-decoration:none"
                        href="{{ route('editTrainRoute', ['id' => $trainRoute->id]) }}">Edit</a>
                    <a class="bt-adm anchorForm m-1 d-flex justify-content-center align-items-center" style="text-decoration:none" href="{{ route('showTrainRoute', $trainRoute->id) }}">Show</a>
                    </form>
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
