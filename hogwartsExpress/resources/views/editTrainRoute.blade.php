@extends('layouts.app')

@section('content')
    <div class="containerCreate">
        <div class="titleCreateForm">
            <h2>Edit a Train Route</h2>
        </div>
        <div class="createFormBox">
            <form class="justify-content-center" action="{{ route('storeTrainRoute') }}" method="post">
                @csrf 
                    <div class="mb-3">
                        <label id="inputGroup-sizing-default">Name</label>
                        <input type="text" name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$trainRoute->name}}">
                    </div>

                    <div class="dateAndRouteLength">
                        <div class="col-xs-3 dateLabelForm">
                            <label id="inputGroup-sizing-default">Date</label>
                            <input type="text" name="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$trainRoute->date}}">
                        </div>
                                    
                        <div class="col-xs-3">
                            <label id="inputGroup-sizing-default">Route Length</label>
                            <input type="text" name="routeLength" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$trainRoute->routeLegth}}">
                        </div>
                    </div>

                    <div class="originAndDEstination">
                        <div class="col-xs-3 originLabelForm">
                            <label id="inputGroup-sizing-default">Origin</label>
                            <input type="text" name="origin" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$trainRoute->origin}}">
                        </div>

                        <div class="col-xs-3">
                            <label id="inputGroup-sizing-default">Destination</label>
                            <input type="text" name="destination" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$trainRoute->destination}}">
                        </div>
                    </div>

                    <div class="departureAndArrivalTime">    
                        <div class="col-xs-3 departureTimeLabelForm">
                            <label id="inputGroup-sizing-default">Departure Time</label>
                            <input type="text" name="departureTime" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$trainRoute->departureTime}}">
                        </div>

                        <div class="col-xs-3">
                            <label id="inputGroup-sizing-default">Arrival Time</label>
                            <input type="text" name="arrivalTime" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$trainRoute->arrivalTime}}">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label id="inputGroup-sizing-default">Available Seats</label>
                        <input type="text" name="availableSeats" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$trainRoute->availableSeats}}">
                    </div>

                    <div class="mb-3">
                        <label id="inputGroup-sizing-default">Features</label>
                        <input type="text" name="features" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$trainRoute->features}}">
                    </div>

                    <div class="mb-3">
                        <label id="inputGroup-sizing-default">Image</label>
                        <input type="text" name="img" class="form-control subirFoto" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$trainRoute->img}}">
                    </div>

                    <div class="buttonsCreateForm" style="text-decoration:none">    
                        <div class="buttonCreateBox">
                            <button type="submit" class="buttonCreateForm" style="text-decoration:none" value="Create">Save</button>
                        </div>

                        <div class="buttonCancelBox">
                            <button class="buttonCancelForm" ><a style="text-decoration:none" href="{{ route('home') }}">Cancel</a></button>
                        </div>
                    </div>

            </form>
        </div>
    </div>
    
@endsection