@extends('layouts.app')

@section('content')
    <div class="createFormContainer">
        <div class="containerCreate">
            <div class="titleCreateForm">
                <h2>New Train Route</h2>
                <p>""Juro solemnemente que esto es una travesura". <b>George Weasley</b></p>
            </div>
            <div class="createFormBox">
                <form class="justify-content-center" action="{{ route('storeTrainRoute') }}" method="post">
                    @csrf 
                        <div class="mb-3">
                            <label id="inputGroup-sizing-default">Name</label>
                            <input type="text" name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Route Title">
                        </div>

                        <div class="dateAndRouteLength">
                            <div class="col-xs-3 dateLabelForm">
                                <label id="inputGroup-sizing-default">Date</label>
                                <input type="text" name="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Date">
                            </div>
                                        
                            <div class="col-xs-3">
                                <label id="inputGroup-sizing-default">Route Length</label>
                                <input type="text" name="routeLength" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Route Length (minutes)">
                            </div>
                        </div>

                        <div class="originAndDEstination">
                            <div class="col-xs-3 originLabelForm">
                                <label id="inputGroup-sizing-default">Origin</label>
                                <input type="text" name="origin" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Departure station">
                            </div>

                            <div class="col-xs-3">
                                <label id="inputGroup-sizing-default">Destination</label>
                                <input type="text" name="destination" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Arrival station">
                            </div>
                        </div>

                        <div class="departureAndArrivalTime">    
                            <div class="col-xs-3 departureTimeLabelForm">
                                <label id="inputGroup-sizing-default">Departure Time</label>
                                <input type="text" name="departureTime" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Departure Time">
                            </div>

                            <div class="col-xs-3">
                                <label id="inputGroup-sizing-default">Arrival Time</label>
                                <input type="text" name="arrivalTime" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Arrival Time">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label id="inputGroup-sizing-default">Available Seats</label>
                            <input type="text" name="availableSeats" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Available Seats">
                        </div>

                        <div class="mb-3">
                            <label id="inputGroup-sizing-default">Features</label>
                            <input type="text" name="features" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Features, description, extras...">
                        </div>

                        <div class="mb-3">
                            <label id="inputGroup-sizing-default">Image</label>
                            <input type="text" name="img" class="form-control subirFoto" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Insert image url">
                        </div>

                        <div class="buttonsCreateForm" style="text-decoration:none">    
                            <div class="buttonCreateBox">
                                <button type="submit" class="buttonCreateForm" style="text-decoration:none" value="Create">Create</button>
                            </div>

                            <div class="buttonCancelBox">
                                <a style="text-decoration:none" href="{{ route('home') }}">Cancel</a>
                            </div>
                        </div>

                </form>
            </div>
        </div>
    </div>
@endsection