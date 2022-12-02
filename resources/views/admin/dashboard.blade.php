@extends('layouts.admin')

@section('content')

@if(session('message'))
<h2>{{session('message')}}</h2>
@endif

<div class="card-columns">
    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
        <div class="card-header">City</div>
            <div class="card-body">
                <a href="{{ url('admin/city') }}">
                    <h5 class="card-title">Count of cities</h5>
                </a>
                    <p class="card-text">{{ $city }}</p>
            </div>
        </div>
    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
        <div class="card-header">Property</div>
            <div class="card-body">
                <a href="{{ url('admin/property') }}">
                    <h5 class="card-title">count of Property</h5>
                </a>
                    <p class="card-text">{{ $property }}</p>
            </div>
        </div>
    <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
        <div class="card-header">Room</div>
            <div class="card-body">
                <a href="{{ url('admin/room') }}">
                    <h5 class="card-title">count of Room</h5>
                </a>
                    <p class="card-text">{{ $room }}</p>
            </div>
        </div>
    <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
        <div class="card-header">Reservation</div>
            <div class="card-body">
                <a href="{{ url('admin/reservation') }}">
                    <h5 class="card-title">count of Reservation</h5>
                </a>
                    <p class="card-text">{{ $reservation }}</p>
            </div>
        </div>
    <div class="card bg-light mb-3" style="max-width: 18rem;">
        <div class="card-header">Payments</div>
            <div class="card-body">
                <a href="{{ url('admin/payment') }}">
                    <h5 class="card-title">count of Payments</h5>
                </a>
                    <p class="card-text">{{ $payment }}</p>
            </div>
        </div>
    <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
        <div class="card-header">Users</div>
            <div class="card-body">
                <a href="{{ url('admin/users') }}">
                    <h5 class="card-title">count of Users</h5>
                </a>
                    <p class="card-text">{{ $users }}</p>
        </div>
    </div>
</div>

@endsection
