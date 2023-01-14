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

    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="a"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">
            @foreach ($trainRoutes as $id => $trainRoute)
                <div class="carousel-item {{$trainRoute['id']==1?'active':''}}">
                    <a href="{{ route('showTrainRoute', $trainRoute->id) }}">
                        <img src="{{ $trainRoute->img }}" class="d-block imageSize w-100" alt="{{ $trainRoute->name }}">

                    </a>
                    <div class="carousel-caption d-none d-md-block">
                        <h3>{{$trainRoute['name']}}</h3>
                      </div>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="cardPosition">
        @foreach ($trainRoutes as $trainRoute)
            <div class="card card mb-4 border-0">
                <a href="{{ route('showTrainRoute', $trainRoute->id) }}">
                    <img src="{{ $trainRoute->img }}" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <h2 class="card-title title titleCard">{{ $trainRoute->name }}</h2>
                    <h5 class="card-title title infoCard">{{ $trainRoute->date }}, {{ $trainRoute->routeLenght }} min.</h5>
                    <h5 class="card-title infoCard"> <strong>From:</strong> {{ $trainRoute->origin }} ({{ $trainRoute->departureTime }}) <strong>To:</strong> {{ $trainRoute->destination }} ({{ $trainRoute->arrivalTime }})</h5>
                    <h5 class="card-title title infoCard">{{ $trainRoute->availableSeats }} Places</h5>
                    <!-- <p class="card-text text-white">{{ $trainRoute->features }}</p> -->
                    <form action="{{ route('deleteTrainRoute', ['id'=> $trainRoute->id]) }}" method="post" class="formStyle">
                        <div class="allButtons">
                            <div class="selectButton">
                                @if(Auth::check() && Auth::user()->isAdmin)
                                    <a class="bt-adm m-1 d-flex justify-content-center align-items-center" style="text-decoration:none" href="{{ route('showTrainRoute', $trainRoute->id) }}">Select</a>
                                @endif
                            </div>
                            <div class="editAndDeleteButton">
                                <div class="editButton">
                                    @if(Auth::check() && Auth::user()->isAdmin)
                                        <a class="bt-adm m-1 d-flex justify-content-center align-items-center" style="text-decoration:none"
                                            href="{{ route('editTrainRoute', ['id' => $trainRoute->id]) }}">Edit</a>
                                    @endif
                                </div>

                                @method('delete')
                                @csrf
                                    <div class="removeButton">
                                        @if(Auth::check() && Auth::user()->isAdmin)
                                            <button type="submit"
                                                class="bt-adm m-1 d-flex justify-content-center align-items-center mx-auto"
                                                onclick="return confirm('Are you sure you want to delete this Train Route? {{ $trainRoute->name }} - ID {{ $trainRoute->id }}')">Remove
                                            </button>
                                        @endif
                                    </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        @endforeach
    </div>

@endsection
