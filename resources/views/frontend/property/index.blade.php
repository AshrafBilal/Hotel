@extends('frontend.master')

@section('content')

<!-- Breadcrumb Section Begin -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h2>Our Properties</h2>
                    <div class="bt-option">
                        <a href="./home.html">Home</a>
                        <span>Properties</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="rooms-section spad">
    <div class="container">
        <div class="row">
            @foreach ($properties as $property)
            <div class="col-lg-4 col-md-6">
                <div class="room-item">
                    <img src="/uploads/property/{{ $property->image }}" alt="">
                    <div class="ri-text">
                        <h4>{{ $property->name }}</h4>
                        <table>
                            <tbody>
                                <tr>
                                    <td class="r-o">City:</td>
                                    <td>
                                        @if($property->city)
                                            {{ $property->city->name }}
                                        @else
                                              No Cities
                                        @endif
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        <a href="{{ url('properties/'.$property->name) }}" class="primary-btn">Rooms</a>
                        <a href="{{ url('properties/'.$property->id.'/show') }}" class="primary-btn" style="float:right;">Show</a>
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

@endsection
