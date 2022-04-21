@extends('layouts.app')


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-2">
                @include('sidebar')

            </div> 
            
            <div class="col-10">
                <div class="card">
                    <div class="card-header">
                        <h6>Create Menu</h6>
                        <a href="/management/menu/create" class='btn btn-primary float-end'>Création de Menu</a>
                        
                    </div> 

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert" ">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                                {{ session('status') }}
                            </div>
@endif
{{-- {{$menus}} --}}
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td>id</td>
                                        <td>Name</td>
                                        <td>Image</td>
                                        <td>Description</td> 
                                        <td>Category</td>
                                        <td>Edit</td>
                                        <td>Delete</td>
                                    </tr>
                                </thead> 
                                <tbody>
                                    @foreach ($menus as $m)
                                    <tr>
                                        <td>{{$m->id}}</td>
                                        <td>{{$m->name}}</td>
                                        <td> <img src="{{asset('storage')}}/{{$m->Image}}" alt="" height='100' width='100'> </td>
                                        <td>{{$m->description}}</td>
                                        {{-- <td>{{$m->getCat}}</td> --}}
                                        <td>{{$m->getCat[0]->name}}</td> 
                                        <td><a href="/management/menu/{{$m->id}}/edit" class="btn btn-warning">Edit</a></td>
                                        <td><a href="/management/menu/{{$m->id}}/delete" class="btn btn-danger">Delete</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- {{ $categories->links() }} --}}
                    </div>
                    
                    <div class="card-footer">


                    </div>

                </div>

            </div>
        </div>
    </div>


@endsection