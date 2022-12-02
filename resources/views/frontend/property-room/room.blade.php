@extends('frontend.master')

@section('content')

<!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Our Rooms</h2>
                        <div class="bt-option">
                            <a href="{{ url('/home') }}">Home</a>
                            <span>Room Property</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Breadcrumb Section End -->

<!-- Rooms Section Begin -->
    <section class="rooms-section spad">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="booking-form">
                    <div class="d-flex justify-content-center">
                        <h3>Make Your Reservation</h3>
                    </div>
                        <form action="{{ url('/reservation') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="d-flex justify-content-center">
                                <div class="col-md-9 mb-3">
                                    <label for="date-in">Check In : </label>
                                    <input type="date" name="check_in" class="form-control" \>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="col-md-9 mb-3">
                                    <label for="date-out">Check Out : </label>
                                    <input type="date" name="check_out" class="form-control">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="col-md-9 mb-3">
                                    <label for="guest">Property : </label>
                                    <input type="text" name="property" value="{{ $room->property->name }}" class="form-control">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="col-md-9 mb-3">
                                    <label for="guest">Room : </label>
                                    <input type="text" name="room" value="{{ $room->name }}" class="form-control">
                                </div>
                            </div>
                            <button type="submit">Save</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
<!-- Rooms Section End -->

@endsection
