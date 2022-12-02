@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Add Product
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

                <form action="{{ url('admin/room') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Property</label>
                            <select name="property_id" class="form-control">
                                @foreach($properties as $property)
                                <option value="{{$property->id}}">{{$property->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Room Name : </label>
                            <input type="text" name="name" class="form-control" />
                            @error('name') <small class="text-danger">{{$message}}</small>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Room Gest : </label>
                            <input type="text" name="gest" class="form-control" />
                            @error('gest') <small class="text-danger">{{$message}}</small>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Room Child : </label>
                            <input type="text" name="child" class="form-control" />
                            @error('child') <small class="text-danger">{{$message}}</small>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Room Bed : </label>
                            <input type="text" name="bed" class="form-control" />
                            @error('bed') <small class="text-danger">{{$message}}</small>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Room Bathroom : </label>
                            <input type="text" name="bathroom" class="form-control" />
                            @error('bathroom') <small class="text-danger">{{$message}}</small>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Room Price : </label>
                            <input type="text" name="price" class="form-control" />
                            @error('price') <small class="text-danger">{{$message}}</small>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Image : </label>
                            <input type="file" name="image" multiple class="form-control" />
                            @error('image') <small class="text-danger">{{$message}}</small>@enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <button type="submit" class="btn btn-primary float-end">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
