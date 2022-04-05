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
                        <a href="/management/category/create" class='btn btn-primary float-end'>Création de Menu</a>
                         
                    </div> 

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert" ">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                                  {{ session('status') }}
                            </div>
@endif
{{-- {{$categories}} --}}
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td>Id</td>
                                        <td>Name</td>
                                        <td>Edit</td>
                                        <td>Delete</td>
                                    </tr>
                                </thead> 
                                <tbody>
                                 
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