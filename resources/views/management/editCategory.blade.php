@extends('layouts.app')


@section('content')

    <div class="div container">
        <div class="row">
            <div class="col-2">
                @include('sidebar')

            </div> 
            
            <div class="col-10">
                <div class="card">
                    <div class="card-header">
                        <h6>Create New Category</h6>
                         
                    </div> 

                    <div class="card-body">
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger">
                                {{ $error }} 
                            </div>
                        
                        @endforeach
                            
                        <form action="/management/category/{{$category_edit->id}}" method='POST'>
                            @csrf
                            @method('PUT')
                            <label class="p-2" for="">Editer la Catégories</label>
                            <input type="text" class='form-control' value='{{$category_edit->name}}' name='cat'> <br>
                            <input type="submit" class="btn btn-danger " value="update">
                        </form>

                    </div>

                    <div class="card-footer">


                    </div>

                </div>

            </div>
        </div>
    </div>


@endsection