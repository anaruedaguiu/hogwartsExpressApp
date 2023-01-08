@extends('layouts.app')

@section('content')
    <div class="containerCreate">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h2 class="cardTitle">New Train Route</h2>
                        <form class="justify-content-center" action="{{ route('storeTrainRoute') }}" method="post">
                            @csrf 
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
                                <input type="text" name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="name">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">User Name</span>
                                <input type="text" name="userName" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="userName">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Origin</span>
                                <input type="text" name="origin" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="origin">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Destination</span>
                                <input type="text" name="destination" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="destination">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Date Time</span>
                                <input type="text" name="datetime" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="datetime">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Departure Time</span>
                                <input type="text" name="departureTime" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="departureTime">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Arrival Time</span>
                                <input type="text" name="arrivalTime" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="arrivalTime">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Route Lenght</span>
                                <input type="text" name="routeLenght" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="routeLenght">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Available Seats</span>
                                <input type="text" name="availableSeats" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="availableSeats">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Features</span>
                                <input type="text" name="features" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="features">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Image</span>
                                <input type="text" name="img" class="form-control subirFoto" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="url image">
                            </div>

                            <div class="float-right">
                                <a class="btn btn-primary" href="{{ route('home') }}">Cancel</a>
                            </div>

                            <div class="btnCreate">
                                <button type="submit" class="btn btn-outline-success" value="Create">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>