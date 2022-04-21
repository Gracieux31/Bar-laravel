@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="edit-section">
                <div class="card-header">
                    <h4>Edit Student with IMAGE
                        <a href="{{ url('fruits') }}">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('update-fruit/'.$fruit->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="name-section">
                            <label for="">Fruit Name</label>
                            <input type="text" name="name" value="{{$fruit->name}}" class="form-control">
                        </div>
                        <div class="image-section">
                            <label for="">Fruit Image</label>
                            <input type="file" name="fruit_image" class="form-control">
                            <img src="{{ asset('uploads/fruits/'.$fruit->fruit_image) }}" width="70px" height="70px" alt="Image">
                        </div>
                        <div class="submit-section">
                            <button type="submit">Update Fruit</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection