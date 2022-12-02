@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">

        @if(session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
        @endif

        <div class="card">
            <div class="card-header">
                <h4>Rooms
                    <a href="{{ url('admin\room\create')}}" class="btn btn-primary text-white float-end">Add Properties</a>
                </h4>
            </div>
            <div class="card-body">
                <table class="table table-boreder tabel-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Property</th>
                            <th>Name</th>
                            <th>Gest</th>
                            <th>Child</th>
                            <th>Bed</th>
                            <th>Bathroom</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($rooms as $room)
                        <tr>
                            <td>{{ $room->id }}</td>
                            <td>
                                @if($room->property)
                                    {{ $room->property->name }}
                                @else
                                      No Properties
                                @endif
                            </td>
                            <td>{{ $room->name }}</td>
                            <td>{{ $room->gest }}</td>
                            <td>{{ $room->child }}</td>
                            <td>{{ $room->bed }}</td>
                            <td>{{ $room->bathroom }}</td>
                            <td>{{ $room->price }} $</td>
                            <td>
                                <img src="/uploads/room/{{ $room->image }}" style="width:70px; height:70px;">
                            </td>
                            <td>
                                <a href="{{ url('admin/room/'.$room->id.'/edit') }}" class="btn btn-success">Edit</a>
                            </td>
                            <td>
                                    <form method="post" action="{{ url('admin/room/'.$room->id) }}">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7">No Rooms Available</td>
                        </tr>
                    @endforelse
                    <tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
