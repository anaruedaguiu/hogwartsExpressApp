@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center">
        @if(Auth::check() && Auth::user()->isAdmin)
            <button class="createButton">
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
        <div class="main-content">
            <div class="ticket">
                <div class="ticket__main">
                    <div class="header">
                        <a href="{{ route('showTrainRoute', $trainRoute->id) }}">{{ $trainRoute->name }}</a>
                    </div>
                    <div class="info passenger">
                        <a href="{{ route('showTrainRoute', $trainRoute->id) }}">
                        <img src="{{ $trainRoute->img }}" class="card-img-top" alt="...">
                        </a>
                    </div>
                    <div class="info platform">
                        <span>Depart</span>
                        <span>from</span>
                        <span>platform</span>
                        <div class="number">
                            <div>9</div>
                            <div>
                                <span>3</span>
                                <span>4</span>
                            </div>
                        </div>
                    </div>

                    <div class="info departure">
                        <div class="info__item">Date</div>
                        <div class="info__detail">{{ $trainRoute->date }}</div>
                    </div>
                    <div class="info arrival">
                        <div class="info__item">Duration</div>
                        <div class="info__detail">{{ $trainRoute->routeLenght }} mins.</div>
                    </div>
                    <div class="info departure">
                        <div class="info__item">Depart</div>
                        <div class="info__detail">{{ $trainRoute->origin }} </div>
                        <div class="info__item">Arrive</div>
                        <div class="info__detail">{{ $trainRoute->destination }} </div>
                    </div>
                    <div class="info seats">
                        <div class="info__item">PLACES</div>
                        {{ $trainRoute->availableSeats }}
                    </div>

                    <div class="fineprint">
                            {{ Str::limit($trainRoute->features, 50)}}
                            <a href="{{ route('showTrainRoute', $trainRoute->id) }}">+INFO </a>
                    </div>


                    <div class="snack">
                        <a href="{{route('inscribe', $trainRoute->id)}}">
                        <svg viewBox="0 -11 414.00053 414">
                        <path d="m202.480469 352.128906c0-21.796875-17.671875-39.46875-39.46875-39.46875-21.800781 0-39.472657 17.667969-39.472657 39.46875 0 21.800782 17.671876 39.472656 39.472657 39.472656 21.785156-.023437 39.445312-17.683593 39.46875-39.472656zm0 0"></path>
                        <path d="m348.445312 348.242188c2.148438 21.691406-13.695312 41.019531-35.390624 43.167968-21.691407 2.148438-41.015626-13.699218-43.164063-35.390625-2.148437-21.691406 13.695313-41.019531 35.386719-43.167969 21.691406-2.148437 41.019531 13.699219 43.167968 35.390626zm0 0"></path>
                        <path d="m412.699219 63.554688c-1.3125-1.84375-3.433594-2.941407-5.699219-2.941407h-311.386719l-3.914062-24.742187c-3.191407-20.703125-21.050781-35.9531252-42-35.871094h-42.699219c-3.867188 0-7 3.132812-7 7s3.132812 7 7 7h42.699219c14.050781-.054688 26.03125 10.175781 28.171875 24.0625l33.800781 213.515625c3.191406 20.703125 21.050781 35.957031 42 35.871094h208.929687c3.863282 0 7-3.132813 7-7 0-3.863281-3.136718-7-7-7h-208.929687c-14.050781.054687-26.03125-10.175781-28.171875-24.0625l-5.746094-36.300781h213.980469c18.117187-.007813 34.242187-11.484376 40.179687-28.597657l39.699219-114.578125c.742188-2.140625.402344-4.511718-.914062-6.355468zm0 0"></path>
                        </svg>
                        </a>
                    </div>

                <div class="barcode">
                    <div class="barcode__scan"></div>
                    <div class="barcode__id">001256733</div>
                </div>




        <div class="formButtons">
            <form action="{{ route('deleteTrainRoute', ['id'=> $trainRoute->id]) }}" method="post">
                <div class="allButtonsBox">
                        @if(Auth::check() && Auth::user()->isAdmin)
                            <a href="{{ route('editTrainRoute', ['id' => $trainRoute->id]) }}" class="button diamont">Edit</a>
                        @endif


                    @method('delete')
                    @csrf
                        @if(Auth::check() && Auth::user()->isAdmin)
                            <button type="submit"
                            onclick="return confirm('Are you sure you want to delete this Train Route? {{ $trainRoute->name }} - ID {{ $trainRoute->id }}')">Remove
                            </button>
                        @endif

                            <a href="{{route('inscribe', $trainRoute->id)}}" class="button inscribe">Subscribe</a>
                            <a href="{{route('unscribe', $trainRoute->id)}}" class="button unscribe">Unsubscribe</a>

                </div>
            </form>
        </div>

    </div>




</div>



</div>

@endforeach


    </div>

@endsection
