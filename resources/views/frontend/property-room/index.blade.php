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
                        <a href="./home.html">Home</a>
                        <span>Properties</span>
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
            @foreach ($rooms as $room)
            <div class="col-lg-4 col-md-6">
                <div class="room-item">
                    <img src="/uploads/room/{{ $room->image }}" alt="">
                    <div class="ri-text">
                        <h4>{{ $room->name }}</h4>
                        <table>
                            <tbody>
                                <tr>
                                    <td class="r-o">Price :</td>
                                    <td>{{ $room->price }} $</td>
                                </tr>
                                <tr>
                                    <td class="r-o">Gest :</td>
                                    <td>{{ $room->gest }}</td>
                                </tr>
                                <tr>
                                    <td class="r-o">Child :</td>
                                    <td>{{ $room->child }}</td>
                                </tr>
                                <tr>
                                    <td class="r-o">Bed :</td>
                                    <td>{{ $room->bed }}</td>
                                </tr>
                                <tr>
                                    <td class="r-o">Bathroom :</td>
                                    <td>{{ $room->bathroom }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="{{ url('show/'.$room->id) }}" class="primary-btn">Show Details</a>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-lg-12">
                <div class="room-pagination">
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">Next <i class="fa fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Rooms Section End -->

@endsection
