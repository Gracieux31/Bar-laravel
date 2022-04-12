@extends('layouts.app')

@section('content')

<div class="container">
	<div class="ligne">
		<div class="col-md-12">

			@if (session('status'))
			<h6 class="alert alert-success">{{ session('status') }}</h6>
			@endif
			
			<div class="card">
				<div class="card-header">
					<h4> Ajouter des fruits
					<a href="{{ url('fruits') }}" class="btn btn-primary float-end">retour</a>
					</h4>
				</div>
				<div class="card-body">
				
					<form action="{{ url('add-fruit') }}" method="POST" enctype="multipart/form-data">
						@csrf

						<div class="form-groupe mb-3">
							<label for="">Fruit Name</label>
							<input type="text" name="name" class="form-control">
						</div>
						<div class="form-groupe mb-3">
							<label for="">Fruit Image</label>
							<input type="file" name="fruit_image" class="form-control">
						</div>
						<div class="form-groupe mb-3">
							<button type="submit" class="btn btn-primary">Save Fruits</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
