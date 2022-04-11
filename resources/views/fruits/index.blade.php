@extends('layouts.app')

@section('content')

<div class="container">
	<div class="ligne">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4> Fruits pour cocktails
						<a href="{{ url('add-fruit') }}" class="btn btn-primary float-end">Add Fruits</a>
					</h4>
				</div>
				<div class="card-body">
					
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>ID</th>
								<th>Name</th>
								<th>Image</th>
								
								<th>Delete</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($fruit as $item)
							<tr>
								<td>{{ $item->id }}</td>
								<td>{{ $item->name }}</td>
								
								<td>
									<img src="{{ asset('uploads/fruits/'.$item->fruit_image) }}" width="70px" height="70px" alt="Image">
								</td>
								{{-- <td>
									<a href="{{ url('edit-fruit/'.$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
								</td> --}}
								<td>
									{{-- <a href="{{ url('delete-fruit/'.$item->id) }}" class="btn btn-danger btn-sm">Delete</a> --}}
									<form action="{{ url('delete-fruit/'.$item->id) }}" method="POST">
										@csrf
										@method('DELETE')
										<button type="submit" class="btn btn-danger btn-sm">Delete</button>
									</form>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					
				</div>
			</div>
		</div>
	</div>
</div>

@endsection	
