@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">

        @if(session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
        @endif

        <div class="card">
            <div class="card-header">
                <h4>Slider List
                    <a href="{{ url('admin\sliders\create')}}" class="btn btn-primary text-white float-end">Add Slider</a>
                </h4>
            </div>
            <div class="card-body">
                <table class="table table-boreder tabel-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sliders as $slider)
                        <tr>
                            <td>{{ $slider ->id }}</td>
                            <td>{{ $slider ->title }}</td>
                            <td>{{ $slider ->description }}</td>
                            <td>
                                <img src="{{ asset("$slider->image") }}" style="width:70px; height:70px;">
                            </td>
                            <td>
                                <a href="" class="btn btn-success">Edit</a>
                                <a href="" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    <tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
