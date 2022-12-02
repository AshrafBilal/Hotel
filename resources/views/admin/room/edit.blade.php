@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Edit Room
                    <a href="{{ url('admin\room')}}" class="btn btn-primary text-white float-end">Back</a>
                </h4>
            </div>
            <div class="card-body">

                @if($errors->any())
                <div class="alert alert-warning">
                    @foreach ($errors->all() as $error)
                        <div>{{$error}}</div>
                    @endforeach
                </div>
                @endif

                <form action="{{ url('admin/room/'.$room->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Property</label>
                            <select name="property_id" class="form-control">
                                @foreach($properties as $property)
                                <option value="{{$property->id}}"{{ $property->id == $room->property->id ? 'selected' : ''}}>
                                    {{$property->name}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Room Name : </label>
                            <input type="text" name="name" value="{{ $room->name }}" class="form-control" />
                            @error('name') <small class="text-danger">{{$message}}</small>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Gest : </label>
                            <input type="text" name="gest" value="{{ $room->gest }}" class="form-control" />
                            @error('gest') <small class="text-danger">{{$message}}</small>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Child : </label>
                            <input type="text" name="child" value="{{ $room->child }}" class="form-control" />
                            @error('child') <small class="text-danger">{{$message}}</small>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Bed : </label>
                            <input type="text" name="bed" value="{{ $room->bed }}" class="form-control" />
                            @error('bed') <small class="text-danger">{{$message}}</small>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Bathroom : </label>
                            <input type="text" name="bathroom" value="{{ $room->bathroom }}" class="form-control" />
                            @error('bathroom') <small class="text-danger">{{$message}}</small>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Price : </label>
                            <input type="text" name="price" value="{{ $room->price }}" class="form-control" />
                            @error('price') <small class="text-danger">{{$message}}</small>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Image : </label>
                            <input type="file" name="image" class="form-control" />
                            <img src="/uploads/room/{{ $room->image }}" width="150px" height="100px" style="margin-top: 10px;">
                            @error('image') <small class="text-danger">{{$message}}</small>@enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <button type="submit" class="btn btn-primary float-end">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
