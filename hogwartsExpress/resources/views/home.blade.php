@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center">
        @if(Auth::check() && Auth::user()->isAdmin)
            <button class=" createButton">
                <a href="{{ route('createTrainRoute') }}" style="text-decoration:none">
                    <div class="textCreateButton"> NEW TRAIN ROUTE </div>
                </a>
            </button>
        @endif
    </div>

    <div class="carouselDesign">
        @foreach ($trainRoutes as $trainRoute)
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="{{ route('showTrainRoute', $trainRoute->id) }}">
                        <img src="{{ $trainRoute->img }}" class="d-block imageSize w-100" alt="...">
                    </a>
                    <div class="carousel-caption textDesign  d-md-block">
                        <h5 class="textSize1">Featured Events</h5>
                        <p class="textSize2">Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
        @endforeach
    </div>

    <div class="cardPosition">
        @foreach ($trainRoutes as $trainRoute)
            <div class="card">
                <a href="{{ route('showTrainRoute', $trainRoute->id) }}">
                    <img src="{{ $trainRoute->img }}" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <h5 class="card-title title">{{ $trainRoute->name }}</h5>
                    <h2 class="card-title fromToTitle">From: {{ $trainRoute->origin }} To: {{ $trainRoute->destination }}</h2>
                    <h5 class="card-title title">📅 {{ $trainRoute->date }} - {{ $trainRoute->departureTime }} - {{ $trainRoute->arrivalTime }} {{ $trainRoute->routeLenght }} min.</h5>
                    <h5 class="card-title title">💺 {{ $trainRoute->availableSeats }} Asientos</h5>
                    <!-- <p class="card-text text-white">{{ $trainRoute->features }}</p> -->
                    <form action="{{ route('deleteTrainRoute', ['id'=> $trainRoute->id]) }}" method="post" class="formStyle">
                    @method('delete')
                    @csrf 
                        @if(Auth::check() && Auth::user()->isAdmin)
                            <button type="submit"
                                class="bt-adm removeButton m-1 d-flex justify-content-center align-items-center mx-auto"
                                onclick="return confirm('Are you sure you want to delete this Train Route? {{ $trainRoute->name }} - ID {{ $trainRoute->id }}')">Remove 
                            </button>
                        @endif
                    @if(Auth::check() && Auth::user()->isAdmin)
                        <a class="bt-adm anchorForm m-1 d-flex justify-content-center align-items-center" style="text-decoration:none"
                            href="{{ route('editTrainRoute', ['id' => $trainRoute->id]) }}">Edit</a>
                        <a class="bt-adm anchorForm m-1 d-flex justify-content-center align-items-center" style="text-decoration:none" href="{{ route('showTrainRoute', $trainRoute->id) }}">Show</a>
                    @endif
                    </form>
                </div>
            </div>
        @endforeach
    </div>

@endsection
