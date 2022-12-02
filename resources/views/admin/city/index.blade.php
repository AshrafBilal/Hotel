@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">

        @if(session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
        @endif

        <div class="card">
            <div class="card-header">
                <h4>Cities
                    <a href="{{ url('admin\city\create')}}" class="btn btn-primary text-white float-end">Add Cities</a>
                </h4>
            </div>
            <div class="card-body">
                <table class="table table-boreder tabel-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th colspan="2" style="margin-left: 50%;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($cities as $city)
                            <tr>
                                <td>{{ $city->id }}</td>
                                <td>{{ $city->name }}</td>
                                <td>{{ $city->description }}</td>
                                <td>
                                    <img src="/uploads/city/{{ $city->image }}" style="width:70px; height:70px;">
                                </td>
                                <td>
                                    <a href="{{ url('admin/city/'.$city->id.'/edit') }}" class="btn btn-success">Edit</a>
                                </td>
                                <td>
                                    <form method="post" action="{{ url('admin/city/'.$city->id) }}">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7">No City Available</td>
                            </tr>
                        @endforelse
                    <tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
