@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Edit Property
                    <a href="{{ url('admin\property')}}" class="btn btn-primary text-white float-end">Back</a>
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

                <form action="{{ url('admin/property/'.$property->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>City</label>
                            <select name="city_id" class="form-control">
                                @foreach($cities as $city)
                                <option value="{{$city->id}}"{{ $city->id == $property->city->id ? 'selected' : ''}}>
                                    {{$city->name}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Property Name : </label>
                            <input type="text" name="name" value="{{ $property->name }}" class="form-control" />
                            @error('name') <small class="text-danger">{{$message}}</small>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Location: </label>
                            <input type="text" name="location" value="{{ $property->location }}" class="form-control" />
                            @error('location') <small class="text-danger">{{$message}}</small>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Image : </label>
                            <input type="file" name="image" class="form-control" />
                            <img src="/uploads/property/{{ $property->image }}" width="150px" height="100px" style="margin-top: 10px;">
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
