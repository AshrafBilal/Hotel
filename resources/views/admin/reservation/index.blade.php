@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">

        @if(session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
        @endif

        <div class="card">
            <div class="card-header">
                <h4>Reservations
                    <a href="{{ url('admin\room\create')}}" class="btn btn-primary text-white float-end">Add Properties</a>
                </h4>
            </div>
            <div class="card-body">
                <table class="table table-boreder tabel-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Check In</th>
                            <th>Check Out</th>
                            <th>Property</th>
                            <th>Room</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($reservations as $reservation)
                        <tr>
                            <td>{{ $reservation->id }}</td>
                            <td>{{ $reservation->check_in }}</td>
                            <td>{{ $reservation->check_out }}</td>
                            <td>{{ $reservation->property }}</td>
                            <td>{{ $reservation->room }}</td>
                            <td>
                                <a href="" class="btn btn-success">Edit</a>
                            </td>
                            <td>
                                    <form method="post" action="">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7">No Properties Available</td>
                        </tr>
                    @endforelse
                    <tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
