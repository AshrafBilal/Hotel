@extends('frontend.master')

@section('content')

<!-- Breadcrumb Section Begin -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h2>Property Details</h2>
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
            <div class="col-6">
                <div class="room-item">
                    <img src="/uploads/property/{{ $property->image }}" alt="">
                    <div class="ri-text">
                        <h4>{{ $property->name }}</h4>
                        <a href="{{ url('properties') }}" class="primary-btn">Back</a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="room-item">
                    <iframe src="{{ $property->location }}" height="500" width="500"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Rooms Section End -->

@endsection
