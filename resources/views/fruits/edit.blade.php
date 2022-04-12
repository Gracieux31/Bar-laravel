@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Edit Student with IMAGE
                        <a href="{{ url('fruits') }}" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('update-fruit/'.$fruit->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">Fruit Name</label>
                            <input type="text" name="name" value="{{$fruit->name}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Fruit Image</label>
                            <input type="file" name="fruit_image" class="form-control">
                            <img src="{{ asset('uploads/fruits/'.$fruit->fruit_image) }}" width="70px" height="70px" alt="Image">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update Fruit</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection